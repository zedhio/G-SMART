<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lkpd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mlkpd");
	}

	public function index(){


		$data['lkpd'] = $this->Mlkpd->tampil_lkpd();
		$this->load->view('pengunjung/lkpd',$data);

		
	}

	public function detail($id){

		$data['lkpd'] = $this->Mlkpd->ambil_lkpd($id);
		$this->load->view('pengunjung/detaillkpd',$data);

	}

}

/* End of file Lkpd.php */
/* Location: ./application/controllers/Lkpd.php */