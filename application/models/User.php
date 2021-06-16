<?php

class user extends CI_Model
{

   public function getUserData($username)
	{
		return $this->db->select('*')->from('users')->where('username', $username)->get()->row();
   }
   
   public function getUserDataById()
	{
		return $this->db->select('*')->from('users')->where('id', 1)->get()->row();
   }
   
   public function updatePassword($password){
      return $this->db->update(
			'users', 
			array('password' => $password), 
			array('id' => 1)
		);
   }
}