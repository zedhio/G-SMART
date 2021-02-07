<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rpp extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mrpp');
		if(!$this->session->userdata('admin'))
		{
			$url = base_url("admin/login");
			echo "<script>alert('Anda harus login dahulu');</script>";
			echo "<script>location='".$url."'</script>";
			exit();
		}
	}

	public function index(){

		$data['rpp'] = $this->Mrpp->tampil_rpp();
		$this->load->view('admin/header');
		$this->load->view('admin/rpp/tampil',$data);
		$this->load->view('admin/footer');
	}

	public function tambah(){

		$data['kelas'] = array('1','2','3','4','5','6');

		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('muatan', 'Muatan', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('jenis', 'Jenis', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));


		$this->form_validation->set_rules('judul', 'Judul', 'trim|required',array(
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
			
			$this->Mrpp->tambah_rpp($this->input->post());
			$this->session->set_flashdata('pesan_rpp', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> RPP Berhasil Di Simpan</div>');
			redirect("admin/rpp/","refresh");
		}



		$this->load->view('admin/header');
		$this->load->view('admin/rpp/tambah',$data);
		$this->load->view('admin/footer');
	}

	public function detail($id){

		$data['rpp'] = $this->Mrpp->ambil_rpp($id);

		$this->load->view('admin/header');
		$this->load->view('admin/rpp/detail',$data);
		$this->load->view('admin/footer');	
	}

	public function edit($id){

		$data['rpp'] = $this->Mrpp->ambil_rpp($id);

		$data['kelas'] = array('1','2','3','4','5','6');

		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('muatan', 'Muatan', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('jenis', 'Jenis', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));


		$this->form_validation->set_rules('judul', 'Judul', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('kata_kunci', 'Kata Kunci', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		if ($this->form_validation->run() == TRUE) {
			
			$this->Mrpp->edit_rpp($this->input->post(),$id);
			$this->session->set_flashdata('pesan_rpp', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> rpp Teks Pelajaran Berhasil Di Simpan</div>');
			redirect("admin/rpp/","refresh");
		}

		$this->load->view('admin/header');
		$this->load->view('admin/rpp/edit',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id){

		$this->Mrpp->hapus_rpp($id);
		$this->session->set_flashdata('pesan_rpp', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> rpp Teks Pelajaran Berhasil Di Hapus</div>');
			redirect("admin/rpp/","refresh");
	}

}

/* End of file Rpp.php */
/* Location: ./application/controllers/admin/Rpp.php */