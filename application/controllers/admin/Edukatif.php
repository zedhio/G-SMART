<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edukatif extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Medukatif');
		if(!$this->session->userdata('admin'))
		{
			$url = base_url("admin/login");
			echo "<script>alert('Anda harus login dahulu');</script>";
			echo "<script>location='".$url."'</script>";
			exit();
		}
	}

	public function index(){

		$data['edukatif'] = $this->Medukatif->tampil_edukatif();
		$this->load->view('admin/header');
		$this->load->view('admin/edukatif/tampil',$data);
		$this->load->view('admin/footer');
	}

	public function tambah(){

		$this->form_validation->set_rules('judul', 'Nama Web', 'trim|required|is_unique[edukatif.judul]',array(
			'required'      => '%s wajib diisi.',
			'is_unique'     => '%s sudah terdaftar.'
		));

		$this->form_validation->set_rules('topik', 'Topik', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));


		$this->form_validation->set_rules('url', 'URL', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('kata_kunci', 'Kata Kunci', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		if ($this->form_validation->run() == TRUE) {
			
			$this->Medukatif->tambah_edukatif($this->input->post());
			$this->session->set_flashdata('pesan_edukatif', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Edukatif Berhasil Di Simpan</div>');
			redirect("admin/edukatif/","refresh");
		}


		$this->load->view('admin/header');
		$this->load->view('admin/edukatif/tambah');
		$this->load->view('admin/footer');
	}

	public function detail($id){

		$data['edukatif'] = $this->Medukatif->ambil_edukatif($id);

		$this->load->view('admin/header');
		$this->load->view('admin/edukatif/detail',$data);
		$this->load->view('admin/footer');	
	}

	public function edit($id){

		$data['edukatif'] = $this->Medukatif->ambil_edukatif($id);
		if($this->input->post('judul')==$data['edukatif']['judul']){
			$is_unique ="";
		}else{
			$is_unique = "|is_unique[edukatif.judul]";
		}

		$this->form_validation->set_rules('judul', 'Nama Web', 'trim|required'.$is_unique,array(
			'required'      => '%s wajib diisi.',
			'is_unique'     => '%s sudah terdaftar.'
		));

		$this->form_validation->set_rules('topik', 'Topik', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));


		$this->form_validation->set_rules('url', 'URL', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('kata_kunci', 'Kata Kunci', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		if ($this->form_validation->run() == TRUE) {
			
			$this->Medukatif->edit_edukatif($this->input->post(),$id);
			$this->session->set_flashdata('pesan_edukatif', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Edukatif Berhasil Di Simpan</div>');
			redirect("admin/edukatif/","refresh");
		}

		$this->load->view('admin/header');
		$this->load->view('admin/edukatif/edit',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id){

		$this->Medukatif->hapus_edukatif($id);
		$this->session->set_flashdata('pesan_edukatif', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Edukatif Berhasil Di Hapus</div>');
			redirect("admin/edukatif/","refresh");
	}

}

/* End of file edukatif.php */
/* Location: ./application/controllers/admin/edukatif.php */