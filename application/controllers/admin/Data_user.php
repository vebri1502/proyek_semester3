<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Data_user extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('m_user', 'm');
	}

	function index() {
		$data['user'] = $this->m->getUser();
		$this->load->view('admin/v_data_user', $data);
	}


	public function hapus($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('admin/data_user'));
	}


	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record updated successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to update record');
		}
		redirect(base_url('admin/data_user'));
	}

	public function edit($id){
		$data['user'] = $this->m->getUserById($id);
		$this->load->view('admin/v_edit_user', $data);
	}
	

	public function tambah(){
		$this->load->view('admin/v_tambah_user');
	}


	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to add record');
		}
		redirect(base_url('admin/data_user'));
	}

}


?>