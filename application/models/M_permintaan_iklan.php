<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_permintaan_iklan extends CI_Model {
	
	public function getPermintaanIklan() {
		$this->db->order_by('id_permintaan', 'desc');
		$query = $this->db->get('data_permintaan_iklan');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


	public function getPermintaanId($id){
		$this->db->where('id_permintaan', $id);
		$query = $this->db->get('data_permintaan_iklan');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


	public function getPermintaan() {
		$this->db->order_by('id_permintaan', 'desc');
		$query = $this->db->get('data_permintaan_iklan');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


	public function submit($id){
		$query = $this->db->query("select * from data_permintaan_iklan where id_permintaan = '$id'");

		return $query->result();
		
	}


	public function delete($id){
		$this->db->where('id_permintaan', $id);
		$this->db->delete('data_permintaan_iklan');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function iklankan(){
		$field = array(
			'nama_pemilik'=>$this->input->post('nama_pemilik'),
			'nama_kos'=>$this->input->post('nama_kos'),
			'jenis'=>$this->input->post('jenis'),
			'alamat'=>$this->input->post('alamat'),
			'foto'=>$this->input->post('foto'),
			'harga'=>$this->input->post('harga'),
			'fasilitas'=>$this->input->post('fasilitas'),
			'kamar_kosong'=>$this->input->post('kamar_kosong'),
			'keterangan'=>$this->input->post('keterangan'),
			);
		$this->db->insert('data_permintaan_iklan', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}






?>