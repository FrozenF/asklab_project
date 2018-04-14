<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Thread');
	}

	public function index()
	{
		$data['Thread'] = $this->Thread->tampil();
		$this->load->view('template/header');
		$this->load->view('forum/index',$data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$data = array(
			'judul' => $this->input->post('judul') , 
			'isi' => $this->input->post('isi')
		);

		$check = $this->Thread->tambah_data($data);
		if ($check) {
			$this->session->set_flashdata('pesan', 'Berhasil Nambah Datanya');
			redirect('Web/index');
		}else{
			echo "Gagal";
		}
	}

	public function hapus($id_thread)
	{
		$this->Thread->hapus_data($id_thread);
		redirect('Web/index','refresh');
	}

	public function form_edit($id_thread){
		$data['edited'] = $this->Thread->get_data($id_thread);
		$this->load->view('forum/form_edit',$data);
	}

	public function ubah()
	{
		$id_thread = $this->input->post('id_thread');
		$data = array(
			'judul' => $this->input->post('judul') ,
			'isi' => $this->input->post('isi'),  
		);
		$this->Thread->edit_data($id_thread,$data);
		redirect('Web/index');
	}

}

/* End of file Web.php */
/* Location: ./application/controllers/Web.php */