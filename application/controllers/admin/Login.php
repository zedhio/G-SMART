<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mlogin');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required',array(
			'required'      => '%s wajib diisi.',
		));

		$this->form_validation->set_rules('password', 'Password', 'required',array(
			'required'      => '%s wajib diisi.',
		));

		if ($this->form_validation->run() == TRUE) {
			$inputan = $this->input->post();
			$cek = $this->Mlogin->login($inputan);
			if ($cek == "berhasil") 
			{
				$this->session->set_flashdata('pesan_login', '<div class="alert alert-info">Selamat Datang</div>');
				echo '<meta http-equiv="refresh" content="0; url = '.base_url("admin/home/").'">';
			}
			else
			{
				$this->session->set_flashdata('pesan_login', '<div class="alert alert-danger">Username dan Password tidak cocok</div>');		
			}	
		}
		$this->load->view('admin/login');		
	}

	function logout()
	{
		session_destroy();
		redirect('admin/login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */