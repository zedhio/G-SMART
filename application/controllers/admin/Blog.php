<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mblog');
		if(!$this->session->userdata('admin'))
		{
			$url = base_url("admin/login");
			echo "<script>alert('Anda harus login dahulu');</script>";
			echo "<script>location='".$url."'</script>";
			exit();
		}
	}

	public function index(){

		$data['blog'] = $this->Mblog->tampil_blog();
		$this->load->view('admin/header');
		$this->load->view('admin/blog/tampil', $data);
		$this->load->view('admin/footer');
	}

	public function tambah(){

		$this->form_validation->set_rules('judul', 'Judul', 'trim|required',array(
			'required'      => '%s wajib diisi.'
			));

		$this->form_validation->set_rules('isi', 'Isi', 'trim|required',array(
			'required'      => '%s wajib diisi.'
			));


		if(empty($_FILES['gambar']['name'])){

			$this->form_validation->set_rules('gambar', 'Cover Blog', 'trim|required',array(
				'required'      => '%s wajib diisi.'
				));
		}

		if ($this->form_validation->run() == TRUE) {
			
			$this->Mblog->tambah_blog($this->input->post());
			$this->session->set_flashdata('pesan_blog', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Blog Berhasil Di Simpan</div>');
			redirect("admin/blog/","refresh");
		}

		$this->load->view('admin/header');
		$this->load->view('admin/blog/tambah');
		$this->load->view('admin/footer');
	}

	public function edit($id){

		$data['blog'] = $this->Mblog->ambil_blog($id);
		
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required',array(
			'required'      => '%s wajib diisi.'
			));

		$this->form_validation->set_rules('isi', 'Isi', 'trim|required',array(
			'required'      => '%s wajib diisi.'
			));

		if ($this->form_validation->run() == TRUE) {
			
			$this->Mblog->edit_blog($this->input->post(),$id);
			$this->session->set_flashdata('pesan_blog', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Blog Berhasil Di Ubah</div>');
			redirect("admin/blog/","refresh");
		}

		$this->load->view('admin/header');
		$this->load->view('admin/blog/edit',$data);
		$this->load->view('admin/footer');
	}

	public function detail($id){

		$data['blog'] = $this->Mblog->ambil_blog($id);

		$this->load->view('admin/header');
		$this->load->view('admin/blog/detail',$data);
		$this->load->view('admin/footer');	
	}

	public function hapus($id){
		$this->Mblog->hapus_blog($id);
		$this->session->set_flashdata('pesan_blog', '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Blog Berhasil Di Hapus</div>');
		redirect("admin/blog/","refresh");
	}

}

/* End of file Rpp.php */
/* Location: ./application/controllers/admin/blog.php */