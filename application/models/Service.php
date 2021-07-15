<?php

class service extends CI_Model
{

   public function getService($id){
      return $this->db->select('*')->from('services')->where('id', $id)->get()->row();
	}
	
	public function getServices(){
      return $this->db->select('*')->order_by('id', 'ASC')->get('services')->result();
	}

   public function updateService($id, $getext, $entext, $rutext, $link1, $link2, $link3, $link4){
      return $this->db->update(
			'services', 
			array('text_ge' => $getext, 'text_en' => $entext, 'text_ru' => $rutext, 'file1' => $link1, 'file2' => $link2, 'file3' => $link3, 'file4' => $link4), 
			array('id' => $id)
		);
   }
   public function updateService2($id, $getext, $entext, $rutext){
      return $this->db->update(
			'services', 
			array('text_ge' => $getext, 'text_en' => $entext, 'text_ru' => $rutext), 
			array('id' => $id)
		);
   }
   
   public function updateFilename($id, $n, $filename){
      return $this->db->update(
			'services', 
			array('file'.$n => $filename), 
			array('id' => $id)
		);
	}

	public function updateFilenames($id, $file1, $file2, $file3, $file4){
      return $this->db->update(
			'services', 
			array('file1' => $file1, 'file2' => $file2, 'file3' => $file3, 'file4' => $file4 ), 
			array('id' => $id)
		);
	}

	public function addThumbnail($id, $i, $filename){
      return $this->db->update(
			'services', 
			array('img'.$i => $filename), 
			array('id' => $id)
		);
	}

	public function addThumbnails($id, $img1, $img2, $img3, $img4){
      return $this->db->update(
			'services', 
			array('img1' => $img1, 'img2' => $img2, 'img3' => $img3, 'img4' => $img4), 
			array('id' => $id)
		);
	}

	public function updateFileThumbnail($id, $i, $filename){
      return $this->db->update(
			'services', 
			array('file'.$i => $filename, 'img'.$i => $filename), 
			array('id' => $id)
		);
	}

	public function updateFilesThumbnails($id, $file1, $file2, $file3, $file4, $img1, $img2, $img3, $img4){
      return $this->db->update(
			'services', 
			array('file1' => $file1, 'file2' => $file2, 'file3' => $file3, 'file4' => $file4, 'img1' => $img1, 'img2' => $img2, 'img3' => $img3, 'img4' => $img4), 
			array('id' => $id)
		);
	}

	public function getArrayServices(){		
		$services = $this->db->get('services')->result_array();
		foreach($services as $i=>$service) {
			$this->db->where('servicesid', $service['id']);
			$filtered_albums = $this->db->get('albums')->result_array();
			$services[$i]['albums'] = $filtered_albums;
		}
		return $services;

	}


}