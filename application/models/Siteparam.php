<?php

class siteparam extends CI_Model
{

   public function getSitetexts(){
      return $this->db->select('*')->from('siteparams')->get()->result();
	}
	public function getArraySitetexts(){
      return $this->db->select('*')->from('siteparams')->get()->result_array();
	}
	public function updateSitetexts($id, $text_ge, $text_en, $text_ru){
      return $this->db->update(
			'siteparams', 
			array('text_ge' => $text_ge, 'text_en' => $text_en, 'text_ru' => $text_ru), 
			array('id' => $id)
		);
	}
	
}