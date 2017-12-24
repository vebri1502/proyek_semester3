<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_kos extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('m_data_kos', 'm');
	}

	function index($id) {
		$data['kost'] = $this->m->getKosById($id);
		$this->load->view('public/v_detail', $data);
	}
}

?>