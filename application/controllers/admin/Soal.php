<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Msoal');
		if(!$this->session->userdata('admin'))
		{
			$url = base_url("admin/login");
			echo "<script>alert('Anda harus login dahulu');</script>";
			echo "<script>location='".$url."'</script>";
			exit();
		}
	}

	public function index(){

		$data['soal'] = $this->Msoal->tampil_soal();
		$this->load->view('admin/header');
		$this->load->view('admin/soal/tampil',$data);
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
			
			$this->Msoal->tambah_soal($this->input->post());
			$this->session->set_flashdata('pesan_soal', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> soal Berhasil Di Simpan</div>');
			redirect("admin/soal/","refresh");
		}



		$this->load->view('admin/header');
		$this->load->view('admin/soal/tambah',$data);
		$this->load->view('admin/footer');
	}

	public function detail($id){

		$data['soal'] = $this->Msoal->ambil_soal($id);

		$this->load->view('admin/header');
		$this->load->view('admin/soal/detail',$data);
		$this->load->view('admin/footer');	
	}

	public function edit($id){

		$data['soal'] = $this->Msoal->ambil_soal($id);

		$data['kelas'] = array('1','2','3','4','5','6');

		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('muatan', 'Muatan', 'trim|required',array(
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
			
			$this->Msoal->edit_soal($this->input->post(),$id);
			$this->session->set_flashdata('pesan_soal', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> soal Teks Pelajaran Berhasil Di Simpan</div>');
			redirect("admin/soal/","refresh");
		}

		$this->load->view('admin/header');
		$this->load->view('admin/soal/edit',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id){

		$this->Msoal->hapus_soal($id);
		$this->session->set_flashdata('pesan_soal', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> soal Teks Pelajaran Berhasil Di Hapus</div>');
			redirect("admin/soal/","refresh");
	}

}

/* End of file soal.php */
/* Location: ./application/controllers/admin/soal.php */