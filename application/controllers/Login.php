<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('M_login');
	}

	
	function index() {
		
		$this->load->view('login');

	}


	function login_process()
	{
		$res = $this->M_login->check();
		if(count($res)>0)
		{
			foreach($res as $res)
			{
				$data = $res->id_pengguna;
				$level = $res->level;
				$nama = $res->nama;
			}

			$_SESSION['user'] = $data;
			$_SESSION['level'] = $level;
			$_SESSION['nama'] = $nama;

			redirect('beranda');
		}else
			{
				echo   "<script>
                alert('Password atau username tidak ditemukan');
                window.location='./';
            </script>";
			}
	}

	public function logout()
	{
		session_destroy();
		redirect('login');
	}

}


?>