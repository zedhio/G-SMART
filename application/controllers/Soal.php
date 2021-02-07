<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Msoal");
	}

	public function index(){


		$data['soal'] = $this->Msoal->tampil_soal();
		$this->load->view('pengunjung/soal',$data);

		
	}

	public function detail($id){

		$data['soal'] = $this->Msoal->ambil_soal($id);
		$this->load->view('pengunjung/detailsoal',$data);

	}

}

/* End of file Soal.php */
/* Location: ./application/controllers/Soal.php */