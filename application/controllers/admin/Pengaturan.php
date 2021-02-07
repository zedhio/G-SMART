<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mpengaturan');
		
		if(!$this->session->userdata('admin'))
		{
			$url = base_url("admin/login");
			echo "<script>alert('Anda harus login dahulu');</script>";
			echo "<script>location='".$url."'</script>";
			exit();
		}
	}

	function index()
	{
		$data['tamu'] = $this->Mpengaturan->tampil_pengaturan();
		$this->load->view('admin/header');
		$this->load->view('admin/pengaturan/tampil', $data);
		$this->load->view('admin/footer');	
	}

	function edit($id)
	{

		$inputan = $this->input->post();
		if ($inputan) 
		{
			$this->Mpengaturan->edit_pengaturan($inputan, $id);
			$this->session->set_flashdata('pesan_pengaturan', '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Pengaturan berhasil diubah</div>');
			redirect("admin/pengaturan/","refresh");
		}

		$data['detail'] = $this->Mpengaturan->detail_pengaturan($id);
		$this->load->view('admin/header');
		$this->load->view('admin/pengaturan/edit', $data);
		$this->load->view('admin/footer');	
	}
	function tambah()
	{
		if ($this->input->post())
		{
			$this->Mpengaturan->simpan_pengaturan($this->input->post());
			redirect('admin/pengaturan','refresh');
		}
		$this->load->view('admin/header');
		$this->load->view('admin/pengaturan/tambah');
		$this->load->view('admin/footer');	
	}
	function hapus($id)
	{
		$this->Mpengaturan->hapus_pengaturan($id);
		redirect('admin/pengaturan','refresh');
	}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/admin/Kategori.php */