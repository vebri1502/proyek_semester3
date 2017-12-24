<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kos extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('m_data_kos', 'm');
	}


	function index() {
		$data['kos'] = $this->m->getDataKos();
		$this->load->view('admin/v_data_kos', $data);
	}


	public function hapus($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('admin/data_kos'));
	}


	public function edit($id){
		$data['kos'] = $this->m->getKosById($id);
		$this->load->view('admin/v_edit_kos', $data);
	}


	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record updated successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to update record');
		}
		redirect(base_url('admin/data_kos'));
	}
}



?>