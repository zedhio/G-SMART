<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

	function login($inputan)
	{
		$username = $inputan['username'];
		$password = $inputan['password'];

		$pass = sha1($password);

		$username = $this->db->escape_str($username);
		$pass = $this->db->escape_str($pass);

		$this->db->where('username',$username);
		$this->db->where('password',$pass);
		$ambil = $this->db->get('admin');

		$nilai = $ambil->num_rows();

		if($nilai==1)
		{
			$akun = $ambil->row_array();

			$this->session->set_userdata('admin',$akun);
			return 'berhasil';
		}
		else
		{
			$username = $this->db->escape_str($username);
			$pass = $this->db->escape_str($pass);
			$this->db->where('email',$username);
			$this->db->where('password',$pass);
			$ambil = $this->db->get('user');
			$nilai = $ambil->num_rows();
			if ($nilai==1) 
			{
				$akun = $ambil->row_array();
				$this->session->set_userdata('user',$akun);
				return 'berhasil-user';
			}
			else
			{
				return "gagal";
			}
		}
	}
}

/* End of file Mlogin.php */
/* Location: ./application/models/Mlogin.php */