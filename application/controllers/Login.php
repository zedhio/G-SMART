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
		$inputan = $this->input->post();
		if ($inputan) 
		{
			$cek = $this->Mlogin->login($inputan);
			if ($cek == "berhasil-user"){
				$data['check']=1;
			}
			else{
				$data['check']=3;
			}
		}else{
			$data['check']='';
		}
		$this->load->view('pengunjung/index',$data);		
	}

	function logout()
	{
		session_destroy();
		redirect('user/login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */