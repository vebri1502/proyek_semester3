<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  function __construct(){
		parent:: __construct();
		$this->load->model('m_register', 'm');
  }

  function index() {
    $this->load->view('v_register2');
  }

  public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to add record');
		}
		redirect(base_url('login'));
	}

}


?>