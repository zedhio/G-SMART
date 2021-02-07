<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		// if ($this->input->post())
		// {
		// 	$this->Mbuku_tamu->tambah_bukutamu($this->input->post());
		// 	$this->session->set_flashdata('pesan',"terimakasih telah menghubungi, pesan Anda akan kami respon segera");
		// 	echo '<meta http-equiv="refresh" content="3; url = '.base_url().'">';
		// }

		$this->load->view('pengunjung/kontak');
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */