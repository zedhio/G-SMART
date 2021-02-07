<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Muser');
		if(!$this->session->userdata('admin'))
		{
			$url = base_url("admin/login");
			echo "<script>alert('Anda harus login dahulu');</script>";
			echo "<script>location='".$url."'</script>";
			exit();
		}
	}

	public function index(){

		$data['siswa'] = $this->Muser->tampil_siswa();
		$this->load->view('admin/header');
		$this->load->view('admin/user/siswa/tampil', $data);
		$this->load->view('admin/footer');
	}

	public function hapus($id){

		$this->Muser->hapus_siswa($id);
		$this->session->set_flashdata('pesan_siswa', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil di hapus</div>');
			redirect("admin/siswa/","refresh");
	}

}

/* End of file Rpp.php */
/* Location: ./application/controllers/admin/siswa.php */