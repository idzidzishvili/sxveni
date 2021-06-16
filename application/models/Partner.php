<?php

class partner extends CI_Model
{

   public function getPartners(){
      return $this->db->select('*')->from('partners')->get()->result();
	}
   public function getArrayPartners(){
      return $this->db->select('*')->from('partners')->get()->result_array();
	}

	public function addPartner($filename, $file, $url){
		$data = array(
			'filename' => $filename,
			'originalname' => $file,
			'url' => $url
		);
		if ($this->db->insert('partners', $data))
			return true;
		return false;
	}

	public function deletePartner($id){
		$this->db->where('id', $id);
		$this->db->delete('partners');
	}


	public function getFilenameByPartnerId($id){
		$this->db->where('id', $id);
		return $this->db->get('partners')->row('filename');
	}

}