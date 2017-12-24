<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_index extends CI_Model {
	
	public function getDataKos() {
		$this->db->order_by('id_kos', 'desc');
		$query = $this->db->get('data_kos');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
}



?>