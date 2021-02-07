<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {

	function ambil_user($id){

		return $this->db->get_where('user',array('id_user'=>$id))->row_array();

	}

	function edit_user($inputan,$id){

		if(!empty($inputan['password'])){
			$inputan['password'] = sha1($inputan['password']);
		}else{
			unset($inputan['password']);
		}

		$this->db->update('user',$inputan,array('id_user'=>$id));
	}

	function tampil_user(){

		$this->db->where('jenis', 'user');
		return $this->db->get('user')->result_array();
	}

	function tampil_siswa(){

		$this->db->where('jenis', 'siswa');
		return $this->db->get('user')->result_array();
	}

	function tampil_guru(){

		$this->db->where('jenis', 'guru');
		return $this->db->get('user')->result_array();
	}

	function hapus_user($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}

	function hapus_siswa($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}

	function hapus_guru($id){
		$this->db->where('id_user', $id);
		$this->db->delete('guru');
	}

}

/* End of file Muser.php */
/* Location: ./application/models/Muser.php */