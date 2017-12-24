<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan_barang extends CI_Controller {

	function index() {
		$this->load->view('admin/v_permintaan_barang');
	}

}



?>