<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if($this->session->userdata('admin')){
			redirect('admin/login','refresh');
		}

		$this->load->model('Mpembelian');
	}

	public function index(){
		$data['pembelian'] = $this->Mpembelian->tampil_pembelian();


		$konten['konten'] = $this->load->view('admin/pembelian/tampil', $data, true);
		$this->load->view('admin/index', $konten);
	}

}

/* End of file Pembelian.php */
/* Location: ./application/controllers/admin/Pembelian.php */