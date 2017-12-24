<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {
	public function submit(){
		$field = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'level'=>$this->input->post('level'),
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email')
			);
		$this->db->insert('data_pengguna', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}



?>