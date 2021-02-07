<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect(base_url(),'refresh');
		}

		$this->load->model("Mbuku");
		$this->load->model("Mlkpd");
		$this->load->model("Mreferensi");
		$this->load->model("Mrpp");
		$this->load->model("Msoal");
		$this->load->model("Muser");
	}

	public function index()
	{
		$user = $this->session->userdata('user');

		$data['user'] = $this->Muser->ambil_user($user['id_user']);

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required',array(
			'required'      => '%s wajib diisi.'
		));

		if($data['user']['jenis']=="Guru" || $data['user']['jenis']=="Siswa"){

			$this->form_validation->set_rules('topik', 'Topik', 'trim|required',array(
				'required'      => '%s wajib diisi.'
			));

			$this->form_validation->set_rules('judul', 'Judul', 'trim|required',array(
				'required'      => '%s wajib diisi.'
			));
		}

		if ($this->form_validation->run() == TRUE) {
			
			$this->Muser->edit_user($this->input->post(),$data['user']['id_user']);
			redirect('profil','refresh');
		}

		$data['buku'] = $this->Mbuku->tampil_buku_guru($data['user']['id_user']);
		$data['rpp'] = $this->Mrpp->tampil_rpp_guru($data['user']['id_user']);
		$data['lkpd'] = $this->Mlkpd->tampil_lkpd_guru($data['user']['id_user']);
		$data['referensi'] = $this->Mreferensi->tampil_referensi_guru($data['user']['id_user']);
		$data['soal'] = $this->Msoal->tampil_soal_guru($data['user']['id_user']);

		$this->load->view('pengunjung/user', $data);
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */