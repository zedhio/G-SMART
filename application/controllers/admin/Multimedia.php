<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multimedia extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mmultimedia');
		if(!$this->session->userdata('admin'))
		{
			$url = base_url("admin/login");
			echo "<script>alert('Anda harus login dahulu');</script>";
			echo "<script>location='".$url."'</script>";
			exit();
		}
	}

	public function index()
	{
		$data['multimedia'] = $this->Mmultimedia->tampil_multimedia();
		$this->load->view('admin/header');
		$this->load->view('admin/multimedia/tampil',$data);
		$this->load->view('admin/footer');
	}

	public function tambah(){

		$data['kelas'] = array('1','2','3','4','5','6');

		$this->form_validation->set_rules('topik', 'Topik', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('judul', 'Judul', 'trim|required',array(
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
			
			$this->Mmultimedia->tambah_multimedia($this->input->post());
			$this->session->set_flashdata('pesan_multimedia', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Multimedia Berhasil Di Simpan</div>');
			redirect("admin/multimedia/","refresh");
		}

		$this->load->view('admin/header');
		$this->load->view('admin/multimedia/tambah', $data);
		$this->load->view('admin/footer');
	}

	public function edit($id){

		$data['multimedia'] = $this->Mmultimedia->ambil_multimedia($id);

		$data['kelas'] = array('1','2','3','4','5','6');

		if($this->input->post('judul')==$data['multimedia']['judul']){
			$is_unique ="";
		}else{
			$is_unique = "|is_unique[multimedia.judul]";
		}

		$this->form_validation->set_rules('judul', 'Nama Multimedia', 'trim|required'.$is_unique,array(
			'required'      => '%s wajib diisi.',
			'is_unique'     => '%s sudah terdaftar.'
		));

		$this->form_validation->set_rules('topik', 'Topik', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required',array(
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
			
			$this->Mmultimedia->edit_multimedia($this->input->post(),$id);
			$this->session->set_flashdata('pesan_multimedia', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Multimedia Berhasil Di Simpan</div>');
			redirect("admin/multimedia/","refresh");
		}

		$this->load->view('admin/header');
		$this->load->view('admin/multimedia/edit',$data);
		$this->load->view('admin/footer');
	}

	public function detail($id){
		$data['multimedia'] = $this->Mmultimedia->ambil_multimedia($id);

		$this->load->view('admin/header');
		$this->load->view('admin/multimedia/detail',$data);
		$this->load->view('admin/footer');	
	}

	public function hapus($id){

		$this->Mmultimedia->hapus_multimedia($id);
		$this->session->set_flashdata('pesan_multimedia', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Multimedia Berhasil Di Hapus</div>');
			redirect("admin/multimedia/","refresh");
	}

}

/* End of file Multimedia.php */
/* Location: ./application/controllers/admin/Multimedia.php */