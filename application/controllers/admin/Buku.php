<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mbuku');
		if(!$this->session->userdata('admin'))
		{
			$url = base_url("admin/login");
			echo "<script>alert('Anda harus login dahulu');</script>";
			echo "<script>location='".$url."'</script>";
			exit();
		}
	}

	public function index(){

		$data['buku'] = $this->Mbuku->tampil_buku();
		$this->load->view('admin/header');
		$this->load->view('admin/buku/tampil',$data);
		$this->load->view('admin/footer');
	}

	public function tambah(){

		$data['kelas'] = array('1','2','3','4','5','6');

		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

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

		$this->form_validation->set_rules('kurikulum', 'Kurikulum', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('kata_kunci', 'Kata Kunci', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));


		if(empty($_FILES['cover']['name'])){

			$this->form_validation->set_rules('cover', 'Cover Buku', 'trim|required',array(
				'required'      => '%s wajib diisi.'
			));
		}

		if(empty($_FILES['file']['name'])){

			$this->form_validation->set_rules('file', 'File Buku', 'trim|required',array(
				'required'      => '%s wajib diisi.'
			));
		}

		if ($this->form_validation->run() == TRUE) {
			
			$this->Mbuku->tambah_buku($this->input->post());
			$this->session->set_flashdata('pesan_buku', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Buku Teks Pelajaran Berhasil Di Simpan</div>');
			redirect("admin/buku/","refresh");
		}



		$this->load->view('admin/header');
		$this->load->view('admin/buku/tambah',$data);
		$this->load->view('admin/footer');
	}

	public function detail($id){

		$data['buku'] = $this->Mbuku->ambil_buku($id);

		$this->load->view('admin/header');
		$this->load->view('admin/buku/detail',$data);
		$this->load->view('admin/footer');	
	}

	public function edit($id){

		$data['buku'] = $this->Mbuku->ambil_buku($id);

		$data['kelas'] = array('1','2','3','4','5','6');

		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

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

		$this->form_validation->set_rules('kurikulum', 'Kurikulum', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('kata_kunci', 'Kata Kunci', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		if ($this->form_validation->run() == TRUE) {
			
			$this->Mbuku->edit_buku($this->input->post(),$id);
			$this->session->set_flashdata('pesan_buku', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Buku Teks Pelajaran Berhasil Di Simpan</div>');
			redirect("admin/buku/","refresh");
		}

		$this->load->view('admin/header');
		$this->load->view('admin/buku/edit',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id){

		$this->Mbuku->hapus_buku($id);
		$this->session->set_flashdata('pesan_buku', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Buku Teks Pelajaran Berhasil Di Hapus</div>');
			redirect("admin/buku/","refresh");
	}

}

/* End of file Buku.php */
/* Location: ./application/controllers/admin/Buku.php */