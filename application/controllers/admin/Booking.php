<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	function index() {
		$this->load->view('admin/v_booking');
	}
}



?>