<?php 
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		if(!$this->session->userdata('admin'))
		{
			$url = base_url("admin/login");
			echo "<script>alert('Anda harus login dahulu');</script>";
			echo "<script>location='".$url."'</script>";
			exit();
		}
	}
	function index()
	{
		$inputan = $this->input->post();
		if ($inputan) 
		{
			$this->Madmin->ubah_admin($inputan);

			$this->session->set_flashdata('pesan_admin', '<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>	</button> Data berhasil diubah</div>');

			redirect("admin/admin/","refresh");
		}


		$data['admin'] = $this->Madmin->tampil_admin();
		$this->load->view('admin/header');
		$this->load->view('admin/edit',$data);
		$this->load->view('admin/footer');
	}
}

?>