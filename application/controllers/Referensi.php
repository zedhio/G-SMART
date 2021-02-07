<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mreferensi");
	}

	public function index(){


		$data['referensi'] = $this->Mreferensi->tampil_referensi();
		$this->load->view('pengunjung/referensi',$data);

		
	}

	public function detail($id){

		$data['referensi'] = $this->Mreferensi->ambil_referensi($id);
		$this->load->view('pengunjung/detailreferensi',$data);

	}

}

/* End of file referensi.php */
/* Location: ./application/controllers/referensi.php */