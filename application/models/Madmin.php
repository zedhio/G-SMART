<?php 
class Madmin extends CI_Model
{
	function tampil_admin()
	{
		$ambil= $this->db->get('admin');
		return $ambil->row_array();
	}
	function ubah_admin($input)
	{
		if(empty($input['password'])){
			unset($input['password']);
		}else{
			
			$input['password'] = sha1($input['password']);
		}

		$this->db->update('admin',$input);

		$akun = $this->tampil_admin();
		$this->session->set_userdata('admin',$akun);
	}
}

?>