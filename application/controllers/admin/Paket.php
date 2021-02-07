<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if($this->session->userdata('admin')){
			redirect('admin/login','refresh');
		}

		$this->load->model('Mpaket');
	}

	public function index(){

		$data['paket'] = $this->Mpaket->tampil_paket();


		$konten['konten'] = $this->load->view('admin/paket/tampil', $data, true);
		$this->load->view('admin/index', $konten);
	}

	public function tambah(){

		$this->form_validation->set_rules('nama_paket', 'Paket', 'required|min_length[5]|max_length[200]|is_unique[paket.nama_paket]',array(
			'required'      => '%s wajib diisi.',
			'is_unique'     => '%s sudah terdaftar.',
			'min_length' => '%s minimal 5 karakter',
			'max_length' => '%s maximal 200 karakter'
		));
		$this->form_validation->set_rules('harga', 'Harga', 'required|min_length[5]|max_length[200]',array(
			'required'      => '%s wajib diisi.',
			'min_length' => '%s minimal 5 karakter',
			'max_length' => '%s maximal 200 karakter'
		));
		$this->form_validation->set_rules('deskripsi_paket', 'Deskripsi', 'required|min_length[5]',array(
			'required'      => '%s wajib diisi.',
			'min_length' => '%s minimal 5 karakter'
		));
		$this->form_validation->set_rules('status', 'Status', 'required',array(
			'required'      => '%s wajib diisi.',
		));

		if ($this->form_validation->run() == TRUE) {
			$this->Mpaket->tambah_paket($this->input->post());
			redirect('admin/paket','refresh');
		}


		$konten['konten'] = $this->load->view('admin/paket/tambah', null, true);
		$this->load->view('admin/index', $konten);

	}


	public function detail($id){

		$data['paket'] = $this->Mpaket->detail_paket($id);


		$konten['konten'] = $this->load->view('admin/paket/detail', $data, true);
		$this->load->view('admin/index', $konten);
	}

	public function edit($id){

		$data['paket'] = $this->Mpaket->detail_paket($id);
		if($this->input->post('nama_paket')==$data['paket']['nama_paket']){
			$is_unique ="";
		}else{
			$is_unique = "|is_unique[paket.nama_paket]";
		}

		$this->form_validation->set_rules('nama_paket', 'Paket', 'required|min_length[5]|max_length[200]'.$is_unique,array(
			'required'      => '%s wajib diisi.',
			'is_unique'     => '%s sudah terdaftar.',
			'min_length' => '%s minimal 5 karakter',
			'max_length' => '%s maximal 200 karakter'
		));
		$this->form_validation->set_rules('harga', 'Harga', 'required|min_length[5]|max_length[200]',array(
			'required'      => '%s wajib diisi.',
			'min_length' => '%s minimal 5 karakter',
			'max_length' => '%s maximal 200 karakter'
		));
		$this->form_validation->set_rules('deskripsi_paket', 'Deskripsi', 'required|min_length[5]',array(
			'required'      => '%s wajib diisi.',
			'min_length' => '%s minimal 5 karakter'
		));
		$this->form_validation->set_rules('status', 'Status', 'required',array(
			'required'      => '%s wajib diisi.',
		));

		if ($this->form_validation->run() == TRUE) {
			$this->Mpaket->edit_paket($this->input->post(),$id);
			redirect('admin/paket','refresh');
		}


		$konten['konten'] = $this->load->view('admin/paket/edit', $data, true);
		$this->load->view('admin/index', $konten);

	}

	public function hapus($id){

		$this->Mpaket->hapus_paket($id);
		redirect('admin/paket','refresh');
	}

}

/* End of file Paket.php */
/* Location: ./application/controllers/admin/Paket.php */