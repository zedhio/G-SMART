<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medukatif extends CI_Model {

	function tampil_edukatif(){

		$this->db->order_by('id_edukatif', 'desc');
		return $this->db->get('edukatif')->result_array();
	}

	function ambil_edukatif($id){

		$this->db->where('id_edukatif', $id);
		return $this->db->get('edukatif')->row_array();
	}

	function tambah_edukatif($inputan){
		$this->db->insert('edukatif', $inputan);
	}

	function edit_edukatif($inputan,$id){
		$this->db->update('edukatif', $inputan,array('id_edukatif'=>$id));
	}

	function hapus_edukatif($id){
		$this->db->delete('edukatif',array('id_edukatif'=>$id));
	}

}

/* End of file Medukatif.php */
/* Location: ./application/models/Medukatif.php */