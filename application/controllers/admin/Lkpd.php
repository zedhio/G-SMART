<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lkpd extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mlkpd');
		if(!$this->session->userdata('admin'))
		{
			$url = base_url("admin/login");
			echo "<script>alert('Anda harus login dahulu');</script>";
			echo "<script>location='".$url."'</script>";
			exit();
		}
	}

	public function index(){

		$data['lkpd'] = $this->Mlkpd->tampil_lkpd();
		$this->load->view('admin/header');
		$this->load->view('admin/lkpd/tampil',$data);
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
			
			$this->Mlkpd->tambah_lkpd($this->input->post());
			$this->session->set_flashdata('pesan_lkpd', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> lkpd Berhasil Di Simpan</div>');
			redirect("admin/lkpd/","refresh");
		}



		$this->load->view('admin/header');
		$this->load->view('admin/lkpd/tambah',$data);
		$this->load->view('admin/footer');
	}

	public function detail($id){

		$data['lkpd'] = $this->Mlkpd->ambil_lkpd($id);

		$this->load->view('admin/header');
		$this->load->view('admin/lkpd/detail',$data);
		$this->load->view('admin/footer');	
	}

	public function edit($id){

		$data['lkpd'] = $this->Mlkpd->ambil_lkpd($id);

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
			
			$this->Mlkpd->edit_lkpd($this->input->post(),$id);
			$this->session->set_flashdata('pesan_lkpd', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> lkpd Teks Pelajaran Berhasil Di Simpan</div>');
			redirect("admin/lkpd/","refresh");
		}

		$this->load->view('admin/header');
		$this->load->view('admin/lkpd/edit',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id){

		$this->Mlkpd->hapus_lkpd($id);
		$this->session->set_flashdata('pesan_lkpd', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> lkpd Teks Pelajaran Berhasil Di Hapus</div>');
			redirect("admin/lkpd/","refresh");
	}

}

/* End of file Lkpd.php */
/* Location: ./application/controllers/admin/Lkpd.php */