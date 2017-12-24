<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Iklankan extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('m_iklan', 'm');
	}

	function index() {
		$this->load->view('public/v_iklankan');	

	}

	public function submit() {
		$result = $this->m->iklankan();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to add record');
		}
		redirect(base_url('beranda'));

	}
	
}



?>