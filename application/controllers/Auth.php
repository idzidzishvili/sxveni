<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->library(array('form_validation'));
		$this->load->model('user');
		$this->load->model('service');
		$this->load->helper(array('file', 'form', 'security'));
		
	}


	public function login(){
		if ($this->session->userdata('logged_in')) redirect('admin/services');
		if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[2]|max_length[200]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[200]');
			if($this->form_validation->run()){
				$userdata = $this->user->getUserData($this->input->post('username'));
				if ($userdata && password_verify($this->input->post('password'), $userdata->password)) {
						$sessiondata = array(
						'user_id'  	=> $userdata->id,
						'user_name' => $userdata->username,
						'logged_in' => TRUE
					);
					$this->session->set_userdata($sessiondata);
					return redirect('/admin/services');
				} else {
					//invalid username or password
					$this->session->set_flashdata('loginerror', "არასწორი მომხმარებელი ან პაროლი");
				}
			}
		}
		$this->load->view('admin/login');
	}

	public function changepassword(){
		if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
			$this->form_validation->set_rules('oldpassword', 'Old password', 'trim|required|min_length[5]|max_length[32]');
			$this->form_validation->set_rules('newpassword1', 'New password', 'trim|required|min_length[5]|max_length[32]');
			$this->form_validation->set_rules('newpassword2', 'Confirm password', 'trim|required|min_length[5]|max_length[32]|matches[newpassword1]');
			if($this->form_validation->run()){
				$userdata = $this->user->getUserDataById();
				if ($userdata && password_verify($this->input->post('oldpassword'), $userdata->password)) {
					$this->user->updatePassword(password_hash($this->input->post('newpassword1'), PASSWORD_BCRYPT));
				}else{
					$this->session->set_flashdata('invOldPwd', 'Invalid old password');
				}
			}
		}
		$data['services'] = $this->service->getServices();
		$data['page'] = 11;
		$this->load->view('admin/changepassword', $data);
	}

	public function logout(){	
		$array_items = array('user_id', 'user_name', 'logged_in');
		$this->session->unset_userdata($array_items);
		redirect('/');
	}


}
