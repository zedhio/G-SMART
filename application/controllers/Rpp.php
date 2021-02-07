<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rpp extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mrpp");
	}

	public function index(){


		$data['rpp'] = $this->Mrpp->tampil_rpp();
		$this->load->view('pengunjung/rpp',$data);

		
	}

	public function detail($id){

		$data['rpp'] = $this->Mrpp->ambil_rpp($id);
		$this->load->view('pengunjung/detailrpp',$data);

	}

}

/* End of file Lkpd.php */
/* Location: ./application/controllers/Lkpd.php */