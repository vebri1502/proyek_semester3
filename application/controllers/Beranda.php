<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_index', 'm');
	}

	
	function index() {
	
		$data['kos'] = $this->m->getDataKos();
		$this->load->view('index', $data);

	}

	
}


?>