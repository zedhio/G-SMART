<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmultimedia extends CI_Model {

	function tampil_multimedia(){
		$this->db->order_by('id_multimedia', 'desc');
		return $this->db->get('multimedia')->result_array();
	}

	function ambil_multimedia($id){
		$this->db->where('id_multimedia', $id);
		return $this->db->get('multimedia')->row_array();
	}

	function tambah_multimedia($inputan){
		$this->db->insert('multimedia', $inputan);
	}

	function edit_multimedia($inputan,$id){
		$this->db->update('multimedia', $inputan,array('id_multimedia'=>$id));
	}

	function hapus_multimedia($id){
		$this->db->delete('multimedia',array('id_multimedia'=>$id));
	}

}

/* End of file Mmultimedia.php */
/* Location: ./application/models/Mmultimedia.php */