<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mreferensi');
		if(!$this->session->userdata('admin'))
		{
			$url = base_url("admin/login");
			echo "<script>alert('Anda harus login dahulu');</script>";
			echo "<script>location='".$url."'</script>";
			exit();
		}
	}

	public function index(){

		$data['referensi'] = $this->Mreferensi->tampil_referensi();
		$this->load->view('admin/header');
		$this->load->view('admin/referensi/tampil',$data);
		$this->load->view('admin/footer');
	}

	public function tambah(){

		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('topik', 'Topik', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('judul', 'Judul', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('pengarang', 'Pengarang', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('kata_kunci', 'Kata Kunci', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));


		if(empty($_FILES['cover']['name'])){

			$this->form_validation->set_rules('cover', 'Cover', 'trim|required',array(
				'required'      => '%s wajib diisi.'
			));
		}

		if(empty($_FILES['file']['name'])){

			$this->form_validation->set_rules('file', 'File', 'trim|required',array(
				'required'      => '%s wajib diisi.'
			));
		}

		if ($this->form_validation->run() == TRUE) {
			
			$this->Mreferensi->tambah_referensi($this->input->post());
			$this->session->set_flashdata('pesan_referensi', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Referensi Berhasil Di Simpan</div>');
			redirect("admin/referensi/","refresh");
		}



		$this->load->view('admin/header');
		$this->load->view('admin/referensi/tambah');
		$this->load->view('admin/footer');
	}

	public function detail($id){

		$data['referensi'] = $this->Mreferensi->ambil_referensi($id);

		$this->load->view('admin/header');
		$this->load->view('admin/referensi/detail',$data);
		$this->load->view('admin/footer');	
	}

	public function edit($id){

		$data['referensi'] = $this->Mreferensi->ambil_referensi($id);

		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('topik', 'Topik', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('judul', 'Judul', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('pengarang', 'Pengarang', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('kata_kunci', 'Kata Kunci', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		if ($this->form_validation->run() == TRUE) {
			
			$this->Mreferensi->edit_referensi($this->input->post(),$id);
			$this->session->set_flashdata('pesan_referensi', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Referensi Berhasil Di Simpan</div>');
			redirect("admin/referensi/","refresh");
		}

		$this->load->view('admin/header');
		$this->load->view('admin/referensi/edit',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id){

		$this->Mreferensi->hapus_referensi($id);
		$this->session->set_flashdata('pesan_referensi', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Referensi Berhasil Di Hapus</div>');
			redirect("admin/referensi/","refresh");
	}

}

/* End of file Referensi.php */
/* Location: ./application/controllers/admin/Referensi.php */