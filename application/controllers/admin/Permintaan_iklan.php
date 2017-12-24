<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan_iklan extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('m_permintaan_iklan', 'm');
	}

	function index() {
		$data['permintaan_iklan'] = $this->m->getPermintaanIklan();
		$this->load->view('admin/v_permintaan_iklan', $data);
	}


	public function setujui($id) {
		$iklan = $this->m->submit($id);
		foreach ($iklan as $ik) {
			$nama_pemilik = $ik->nama_pemilik;
			$nama_kos = $ik->nama_kos;
			$jenis = $ik->jenis;
			$alamat = $ik->alamat;
			$foto = $ik->foto;
			$harga = $ik->harga;
			$fasilitas = $ik->fasilitas;
			$kamar_kosong = $ik->kamar_kosong;
			$keterangan = $ik->keterangan;

		}
		$field = array(
			'nama_kos'=>$nama_kos,
			'jenis'=>$jenis,
			'alamat'=>$alamat,
			'foto'=>$foto,
			'harga'=>$harga,
			'fasilitas'=>$fasilitas,
			'kamar_kosong'=>$kamar_kosong,
			'keterangan' =>$keterangan
			);
		$this->db->insert('data_kos', $field);
		redirect(base_url('admin/permintaan_iklan'));
		
		
		
	}


	public function tolak($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('admin/permintaan_iklan'));
	}


}
?>