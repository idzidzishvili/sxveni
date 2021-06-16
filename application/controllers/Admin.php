<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) redirect('auth/login');
		$this->load->library(array('form_validation'));
		$this->load->model('service');		
		$this->load->helper(array('file', 'form', 'security'));
	}


	public function index($page=1){
	
		return redirect('/admin/services/1');
	}


	public function services($page=1){			
		$data['services'] = $this->service->getServices();
		$data['currentService'] = $this->service->getService($page);
		$data['page'] = $page;
		if (!$data['currentService']->issimple){
			$this->load->model('album');
			$data['albumData'] = $this->album->getalbumData($page);
		}
		$this->load->view('admin/webservice', $data);
	}


	public function processUpload($page=1){
		$res = array();
		$this->form_validation->set_rules('getext', 'Georgian text', 'trim|required|xss_clean');
		$this->form_validation->set_rules('entext', 'English text', 'trim|required|xss_clean');
		$this->form_validation->set_rules('rutext', 'Russian text', 'trim|required|xss_clean');
		if($this->form_validation->run()){
			$getext = $this->input->post('getext', true);
			$entext = $this->input->post('entext', true);
			$rutext = $this->input->post('rutext', true);
			if($this->service->updateService($page, $getext, $entext, $rutext)){
				array_push($res, array('msg'=>'მონაცემები დაემატა წარმატებით', 'res'=>'1'));
			}else{
				array_push($res, array('msg'=>'ვერ მოხერხდა მონაცემების დამატება', 'res'=>'0'));
			}
			//Validation passed			
			if(isset($_FILES['file_upload'])){
				$numFilesUploaded = count($_FILES['file_upload']['name']);
				// Album upload
				$this->load->model('album');
				for ($i=0; $i<$numFilesUploaded; $i++) {
					if($_FILES['file_upload']['name'][$i]){//If not empty file
						$_FILES['uploadedFiles']['name'] 		= $_FILES['file_upload']['name'][$i];
						$_FILES['uploadedFiles']['type'] 		= $_FILES['file_upload']['type'][$i];
						$_FILES['uploadedFiles']['tmp_name'] 	= $_FILES['file_upload']['tmp_name'][$i];
						$_FILES['uploadedFiles']['error'] 		= $_FILES['file_upload']['error'][$i];
						$_FILES['uploadedFiles']['size'] 		= $_FILES['file_upload']['size'][$i];

						$newname = md5(time().uniqid());
						$config['upload_path'] = './assets/uploads';
						$config['max_size'] = 12800000;
						$config['allowed_types'] = 'avi|mp4|mpg|mpeg|jpg|jpeg|png|mp3|vaw';
						$config['overwrite'] = TRUE;
						$config['remove_spaces'] = TRUE;
						$config['file_name'] = $newname;

						$this->load->library('upload');
						$this->upload->initialize($config);
						if ($this->upload->do_upload('uploadedFiles')){
							array_push($res, array('msg'=>'ფაილი '.$_FILES['file_upload']['name'][$i].' აიტვირთა.', 'res'=>'1'));
							$this->album->addAlbumData($page, $this->input->post('album_category')[$i], $newname, $_FILES['file_upload']['name'][$i]);
						}else{
							array_push($res, array('msg'=>'ფაილი '.$_FILES['file_upload']['name'][$i].' ვერ აიტვირთა!', 'res'=>'0'));
							// var_dump($this->upload->display_errors());
						}
					}//Empty input field, just skip it
				}
			}else{
				// non album (4 file) upload
				for($i=0; $i<4; $i++){			
					if($this->input->post('filename'.$i)){					
						$image_name= $_FILES['image_upload'.$i]['name'];
						$image_type= $_FILES['image_upload'.$i]['type'];
						$image_size= $_FILES['image_upload'.$i]['size'];
						$image_tmp_name=$_FILES['image_upload'.$i]['tmp_name'];						
						$filename = 'file'.str_repeat('0', 2-strlen($page)).$page.str_repeat('0', 2-strlen($i+1)).($i+1);
						$ext = $_FILES['image_upload'.$i]['type'];
						$search  = array("image/png", "image/jpg", "image/jpeg", "audio/mp3", "video/mp4");
						$replace = array(".png", 		".jpg", 		 ".jpg", 		".mp3", 		 ".mp4");
						$ext = str_replace($search, $replace, $ext);
						$filename .= $ext;
						move_uploaded_file($image_tmp_name, "assets/uploads/".$filename);
						$this->service->updateFilename($page, $i+1, $filename);
					}
				}
			}
		}//Validation did not passed		
		return redirect('/admin/services/'.$page);
	}


	public function processUpdateService($page=1){
		if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
			$currentService = $this->service->getService($page);
			$res = array();
			$this->form_validation->set_rules('getext', 'Georgian text', 'trim|xss_clean');
			$this->form_validation->set_rules('entext', 'English text', 'trim|xss_clean');
			$this->form_validation->set_rules('rutext', 'Russian text', 'trim|xss_clean');
			if($this->form_validation->run()){
				$getext = $this->input->post('getext', true);
				$entext = $this->input->post('entext', true);
				$rutext = $this->input->post('rutext', true);
				$link1 = $link2 = $link3 = $link4 = null;
				if($currentService->content_type=='video' && $currentService->issimple){
					$link1 = $this->input->post('link1') ? $this->sanitize_youtube_link($this->input->post('link1', true)):null;
					$link2 = $this->input->post('link2') ? $this->sanitize_youtube_link($this->input->post('link2', true)):null;
					$link3 = $this->input->post('link3') ? $this->sanitize_youtube_link($this->input->post('link3', true)):null;
					$link4 = $this->input->post('link4') ? $this->sanitize_youtube_link($this->input->post('link4', true)):null;
				}
				if($this->service->updateService($page, $getext, $entext, $rutext, $link1, $link2, $link3, $link4)){
					array_push($res, array('msg'=>'მონაცემები დაემატა წარმატებით', 'res'=>'1'));
				}else{
					array_push($res, array('msg'=>'ვერ მოხერხდა მონაცემების დამატება', 'res'=>'0'));
				}

				// Upload file or thumbnail from each input file
				$config['upload_path']   = './assets/uploads/';
				$config['allowed_types'] = 'jpg|jpeg|png|mp3';
				// $config['max_size']      = '5000';
				// $config['max_width']     = '4096';
				// $config['max_height']    = '1600';
				$config['overwrite']     = true;
				$langs = array('ge', 'en', 'ru');
				for($i=1; $i<=4; $i++){
					foreach ($langs as $lang){
						$filename = 'file'.$lang.$i;					
						if($_FILES[$filename]['name']){
							$newname = 'file_'.$lang.$page.$i;
							$file_ext = pathinfo($_FILES[$filename]['name'], PATHINFO_EXTENSION);
							$config['file_name'] = $newname . '.' .$file_ext;
							$this->load->library('upload', $config);
							$this->upload->initialize($config);
							if ($this->upload->do_upload($filename))
							{
								//$this->form_validation->set_message('checkdoc', $data['error'] = $this->upload->display_errors());
								// if ($page==1||$page==3){
								// 	$this->service->updateFileThumbnail($page, $lang.$i, $newname.'.'.$file_ext);
								// }else{
									$this->service->addThumbnail($page, $lang.$i, $newname.'.'.$file_ext);
								// }
							}
						}
					}
				}
				
				// upload and save multiple input file				
				if(!$currentService->issimple){
					$this->load->model('album');
					if(isset($_FILES['file_upload'])){
						$numFilesUploaded = count($_FILES['file_upload']['name']);
						// Album upload					
						for ($i=0; $i<$numFilesUploaded; $i++) {
							if($_FILES['file_upload']['name'][$i]){//If not empty file
								$_FILES['uploadedFiles']['name'] 		= $_FILES['file_upload']['name'][$i];
								$_FILES['uploadedFiles']['type'] 		= $_FILES['file_upload']['type'][$i];
								$_FILES['uploadedFiles']['tmp_name'] 	= $_FILES['file_upload']['tmp_name'][$i];
								$_FILES['uploadedFiles']['error'] 		= $_FILES['file_upload']['error'][$i];
								$_FILES['uploadedFiles']['size'] 		= $_FILES['file_upload']['size'][$i];

								$file_ext = pathinfo($_FILES['file_upload']['name'][$i], PATHINFO_EXTENSION);
								$newname = md5(time().uniqid()). '.' .$file_ext;
								$config['upload_path'] = './assets/uploads';
								$config['max_size'] = 12800000;
								$config['allowed_types'] = 'avi|mp4|mpg|mpeg|jpg|jpeg|png|mp3|vaw';
								$config['overwrite'] = TRUE;
								$config['remove_spaces'] = TRUE;
								$config['file_name'] = $newname ;

								$this->load->library('upload');
								$this->upload->initialize($config);
								if ($this->upload->do_upload('uploadedFiles')){
									array_push($res, array('msg'=>'ფაილი '.$_FILES['file_upload']['name'][$i].' აიტვირთა.', 'res'=>'1'));
									$this->album->addAlbumData($page, $this->input->post('album_category')[$i], $newname, $_FILES['file_upload']['name'][$i]);
								}else{
									array_push($res, array('msg'=>'ფაილი '.$_FILES['file_upload']['name'][$i].' ვერ აიტვირთა!', 'res'=>'0'));
									// var_dump($this->upload->display_errors());
								}
							}//Empty input field, just skip it
						}
					}
					
					// save multiple video links
					if(isset($_POST['videolink'])){
						$numFields = count($_POST['videolink']);
						for($i=0; $i<$numFields;$i++){
							if(!empty($_POST['videolink'][$i]))
							$this->album->addAlbumData($page, $this->input->post('album_category')[$i], $this->sanitize_youtube_link($_POST['videolink'][$i]),null);
						}
					}
				}
			}//Validation did not passed
		}	
		return redirect('/admin/services/'.$page);
	}


	public function deletealbumitem($id, $pageid){
		if (filter_var($id, FILTER_VALIDATE_INT) && $id>0) {
			
			$this->load->model('album');
			$filename = $this->album->getFilenameByAlbumId($id);
			$this->album->deleteAlbumItem($id);
			$this->load->helper("file");
			delete_files('./assets/uploads/'.$filename);
		}
		return redirect('/admin/services/'.$pageid);
	}


	public function partners(){
		$this->load->model('partner');
		if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
			
			$this->form_validation->set_rules('partnerurl', 'URL', 'trim|required|xss_clean');
			if (empty($_FILES['partnerlogo']['name']))
				$this->form_validation->set_rules('partnerlogo', 'Logo', 'required');

			if($this->form_validation->run()){
				$newname = md5(time().uniqid());
				$config['upload_path']   = './assets/uploads/partners/';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['max_size']      = '5000';
				$config['max_width']     = '4096';
				$config['max_height']    = '1600';
				$config['file_name'] 	 = $newname;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('partnerlogo'))
				{
					//$this->form_validation->set_message('checkdoc', $data['error'] = $this->upload->display_errors());
					$file = $_FILES['partnerlogo']['name'];
					$file_ext = pathinfo($file, PATHINFO_EXTENSION);					
					$this->partner->addPartner($newname.'.'.$file_ext, $file, $this->input->post('partnerurl', true));
				}
			}
		}
		$data['partners'] = $this->partner->getPartners();
		$data['services'] = $this->service->getServices();
		$data['page'] = 9;
		$this->load->view('admin/partners', $data);
	}


	public function deletepartner($id=0){
		if (filter_var($id, FILTER_VALIDATE_INT) && $id>0) {
			$this->load->model('partner');
			$filename = $this->partner->getFilenameByPartnerId($id);
			$this->partner->deletePartner($id);
			$this->load->helper("file");
			unlink('assets/uploads/partners/'.$filename);
		}
		return redirect('/admin/partners');
	}


	public function sitetexts(){
		$this->load->model('siteparam');
		if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
			$this->form_validation->set_rules('services_ge', 'Services', 'trim|required|xss_clean');
			$this->form_validation->set_rules('services_en', 'Services', 'trim|required|xss_clean');
			$this->form_validation->set_rules('services_ru', 'Services', 'trim|required|xss_clean');

			$this->form_validation->set_rules('portfolio_ge', 'Portfolio', 'trim|required|xss_clean');
			$this->form_validation->set_rules('portfolio_en', 'Portfolio', 'trim|required|xss_clean');
			$this->form_validation->set_rules('portfolio_ru', 'Portfolio', 'trim|required|xss_clean');

			$this->form_validation->set_rules('partners_ge', 'Partners', 'trim|required|xss_clean');
			$this->form_validation->set_rules('partners_en', 'Partners', 'trim|required|xss_clean');
			$this->form_validation->set_rules('partners_ru', 'Partners', 'trim|required|xss_clean');

			$this->form_validation->set_rules('contact_ge', 'Contact', 'trim|required|xss_clean');
			$this->form_validation->set_rules('contact_en', 'Contact', 'trim|required|xss_clean');
			$this->form_validation->set_rules('contact_ru', 'Contact', 'trim|required|xss_clean');
			
			$this->form_validation->set_rules('company_address_ge', 'Address', 'trim|required|xss_clean');
			$this->form_validation->set_rules('company_address_en', 'Address', 'trim|required|xss_clean');
			$this->form_validation->set_rules('company_address_ru', 'Address', 'trim|required|xss_clean');

			$this->form_validation->set_rules('company_phone', 'Company phone', 'trim|required|xss_clean');
			$this->form_validation->set_rules('company_email', 'Company email', 'trim|required|xss_clean');

			$this->form_validation->set_rules('facebookpage', 'Facebook page', 'trim|required|xss_clean|valid_url');
			$this->form_validation->set_rules('instagrampage', 'Instagram page', 'trim|required|xss_clean|valid_url');
			$this->form_validation->set_rules('linkedinpage', 'Linkedin page', 'trim|required|xss_clean|valid_url');
			$this->form_validation->set_rules('youtubepage', 'Youtube page', 'trim|required|xss_clean|valid_url');
			if($this->form_validation->run()){
				$this->siteparam->updateSitetexts(
					1,
					$this->input->post('services_ge', true),
					$this->input->post('services_en', true),
					$this->input->post('services_ru', true)
				);
				$this->siteparam->updateSitetexts(
					2,
					$this->input->post('portfolio_ge', true),
					$this->input->post('portfolio_en', true),
					$this->input->post('portfolio_ru', true)
				);
				$this->siteparam->updateSitetexts(
					3,
					$this->input->post('partners_ge', true),
					$this->input->post('partners_en', true),
					$this->input->post('partners_ru', true)
				);
				$this->siteparam->updateSitetexts(
					4,
					$this->input->post('contact_ge', true),
					$this->input->post('contact_en', true),
					$this->input->post('contact_ru', true)
				);
				$this->siteparam->updateSitetexts(
					5,
					$this->input->post('company_address_ge', true),
					$this->input->post('company_address_en', true),
					$this->input->post('company_address_ru', true)
				);
				$this->siteparam->updateSitetexts(6, $this->input->post('company_phone', true), null, null);
				$this->siteparam->updateSitetexts(7, $this->input->post('company_email', true), null, null);	
				$this->siteparam->updateSitetexts(8, $this->input->post('facebookpage', true), null, null);
				$this->siteparam->updateSitetexts(9, $this->input->post('instagrampage', true), null, null);
				$this->siteparam->updateSitetexts(10, $this->input->post('linkedinpage', true), null, null);
				$this->siteparam->updateSitetexts(11, $this->input->post('youtubepage', true), null, null);	
			}
		}
		$data['services'] = $this->service->getServices();
		$data['siteTexts'] = $this->siteparam->getSitetexts();
		$data['page'] = 10;
		$this->load->view('admin/sitetexts', $data);
	}


	private function sanitize_youtube_link($link){
		$link = str_replace('https://www.youtube.com/watch?v=', '', $link);
		$link = str_replace('http://www.youtube.com/watch?v=', '', $link);
		$link = str_replace('www.youtube.com/watch?v=', '', $link);
		$link = str_replace('https://youtu.be/', '', $link);
		return substr($link, 0, 11);
	}

}
