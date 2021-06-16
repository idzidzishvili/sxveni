<?php

class album extends CI_Model
{
   public function getAlbumData($serviceId){
      return $this->db->select('*')->from('albums')->where('servicesid', $serviceId)->order_by('albumid')->get()->result();
	}
	
	public function addAlbumData($servicesid, $albumid, $filename, $originalname){
		$data = array(
			'servicesid' 	=> $servicesid,
			'albumid' 		=> $albumid,
			'filename' 		=> $filename,
			'originalname' => $originalname
		);
		if ($this->db->insert('albums', $data))
			return true;
		return false;
	}

	public function deleteAlbumItem($id){
		$this->db->where('id', $id);
		$this->db->delete('albums');
	}

	public function getFilenameByAlbumId($id){
		$this->db->where('id', $id);
		return $this->db->get('albums')->row('filename');
	}

	public function getAlbum(){
      return $this->db->select('*')->from('albums')->get()->result();
	}


}