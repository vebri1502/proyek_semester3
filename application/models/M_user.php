<?php


class M_user extends CI_Model {

	public function getUser(){
		$this->db->order_by('id_pengguna');
		$query = $this->db->get('data_pengguna');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


	public function delete($id){
		$this->db->where('id_pengguna', $id);
		$this->db->delete('data_pengguna');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getUserById($id){
		$this->db->where('id_pengguna', $id);
		$query = $this->db->get('data_pengguna');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update(){
		$id = $this->input->post('id_pengguna');
		$field = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'email'=>$this->input->post('email'),
			'nama'=>$this->input->post('nama')
			
			);
		$this->db->where('id_pengguna', $id);
		$this->db->update('data_pengguna', $field);
		echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


	public function submit(){
		$field = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'level'=>$this->input->post('level'),
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email')
			);
		$this->db->insert('data_pengguna', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}



}




?>