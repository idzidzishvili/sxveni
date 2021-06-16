<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
	}

	public function index()
	{
		$this->load->helper(array('form', 'security', 'cookie'));
		$this->load->model('service');
		$this->load->model('album');
		$this->load->model('siteparam');
		$this->load->model('partner');

		if (get_cookie('lang') && (get_cookie('lang') == 'georgian' || get_cookie('lang') == 'russian' || get_cookie('lang') == 'english')){
			$this->session->set_userdata('lang', get_cookie('lang'));
			$this->lang->load('home', $this->session->userdata('lang'));
		}else if($this->session->userdata('lang')){
			$this->lang->load('home', $this->session->userdata('lang'));
		}else{
			$this->session->set_userdata('lang', 'georgian');
			$this->lang->load('home', 'georgian');
		}
		$data['lang'] = substr($this->session->userdata('lang'),0,2);
		$data['services'] = $this->service->getArrayServices();
		$data['siteTexts'] = $this->siteparam->getArraySitetexts();
		$data['partners'] = $this->partner->getArrayPartners();
		$this->load->view('homepage', $data);
	}
	
	public function en(){
		$this->session->set_userdata('lang', 'english');
		$lang_cookie = array('name' => 'lang', 'value' => 'english', 'expire' => '72000', 'secure' => isset($_SERVER['HTTPS']));
		$this->input->set_cookie($lang_cookie);
		return redirect('/home');		
	}

	public function ge()
	{
		$this->session->set_userdata('lang', 'georgian');
		$lang_cookie = array('name' => 'lang', 'value' => 'georgian', 'expire' => '72000', 'secure' => isset($_SERVER['HTTPS']));
		$this->input->set_cookie($lang_cookie);
		return redirect('/');
	}

	public function ru()
	{
		$this->session->set_userdata('lang', 'russian');
		$lang_cookie = array('name' => 'lang', 'value' => 'russian', 'expire' => '72000', 'secure' => isset($_SERVER['HTTPS']));
		$this->input->set_cookie($lang_cookie);
		return redirect('/home');
	}


	public function notfound()
	{
		$this->load->helper(array('cookie'));
		$this->load->model('siteparam');
		if (get_cookie('lang') && (get_cookie('lang') == 'georgian' || get_cookie('lang') == 'russian' || get_cookie('lang') == 'english')){
			$this->session->set_userdata('lang', get_cookie('lang'));
			$this->lang->load('home', $this->session->userdata('lang'));
		}else if($this->session->userdata('lang')){
			$this->lang->load('home', $this->session->userdata('lang'));
		}else{
			$this->session->set_userdata('lang', 'georgian');
			$this->lang->load('home', 'georgian');
		}
		$data['lang'] = substr($this->session->userdata('lang'),0,2);
		$data['siteTexts'] = $this->siteparam->getArraySitetexts();
		$this->load->view('404', $data);
	}
}
