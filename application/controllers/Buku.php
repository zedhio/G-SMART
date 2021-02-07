<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mbuku");
	}

	public function index(){


		$data['buku'] = $this->Mbuku->tampil_buku();
		$this->load->view('pengunjung/buku',$data);

		
	}

	public function detail($id){

		$data['buku'] = $this->Mbuku->ambil_buku($id);
		$this->load->view('pengunjung/detailbuku',$data);

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
			redirect("profil","refresh");
		}

		$this->load->view('pengunjung/bukuedit',$data);
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
			
			$inputan = $this->input->post();
			$inputan['id_guru'] = $_SESSION['user']['id_user'];
			$this->Mbuku->tambah_buku($inputan);
			$this->session->set_flashdata('pesan_buku', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Buku Teks Pelajaran Berhasil Di Simpan</div>');
			redirect("profil","refresh");
		}

		$this->load->view('pengunjung/bukutambah',$data);
	}

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */