<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {


	function check()
	{
		$username = $this->input->post('username');
		$password  = $this->input->post('password');

		$query = $this->db->query("select * from data_pengguna where username = '$username' and password= '$password'");

		return $query->result();
	}

// akhir dari model
}