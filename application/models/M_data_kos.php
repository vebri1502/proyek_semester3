<?php


class M_data_kos extends CI_Model {

	public function getDataKos(){
		$this->db->order_by('id_kos');
		$query = $this->db->get('data_kos');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_kos', $id);
		$this->db->delete('data_kos');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


	public function getKosById($id){
		$this->db->where('id_kos', $id);
		$query = $this->db->get('data_kos');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


	public function update(){
		$id = $this->input->post('id_kos');
		$field = array(
			'nama_kos'=>$this->input->post('nama_kos'),
			'id_pemilik'=>$this->input->post('id_pemilik'),
			'jenis'=>$this->input->post('jenis'),
			'alamat'=>$this->input->post('alamat'),
			'alamat'=>$this->input->post('alamat'),
			'foto'=>$this->input->post('foto'),
			'harga'=>$this->input->post('harga'),
			'fasilitas'=>$this->input->post('fasilitas'),
			'kamar_kosong'=>$this->input->post('kamar_kosong'),
			'keterangan'=>$this->input->post('keterangan')
						
			);
		$this->db->where('id_kos', $id);
		$this->db->update('data_kos', $field);
		echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}




}




?>





