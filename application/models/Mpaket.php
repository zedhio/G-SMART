<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpaket extends CI_Model {

	function tampil_paket(){
		$this->db->order_by('id_paket', 'desc');
		return $this->db->get('paket')->result_array();
	}

	function detail_paket($id){
		$this->db->order_by('id_paket', 'desc');
		$this->db->where('id_paket', $id);
		return $this->db->get('paket')->row_array();	
	}

	function edit_paket($inputan,$id){

		$this->db->update('paket', $inputan,array('id_paket'=>$id));
	}

	function tambah_paket($inputan){
		$this->db->insert('paket', $inputan);
	}

	function hapus_paket($id){
		$this->db->delete('paket',array('id_paket'=>$id));
	}

}

/* End of file Mpaket.php */
/* Location: ./application/models/Mpaket.php */