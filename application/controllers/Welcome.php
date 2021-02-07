<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$data['check']='';
		$this->load->view('pengunjung/index', $data);
	}

	public function logout(){

		$this->session->unset_userdata('user');
		redirect(base_url(),'refresh');
	}
}
