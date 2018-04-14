<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tanya');
		$this->load->helper('date');
	}

	public function index()
	{
		$data["pertanyaan"] = $this->Tanya->tampil();
		$this->load->view("template/header");
		$this->load->view("forum/index",$data);
		$this->load->view("template/footer");
	}

	public function tambah(){
		$data = array(
			'judul_pertanyaan' => $this->input->post('judul'),
			'isi' 	=> $this->input->post('isi'),
			);

		$check = $this->Tanya->tambah_data($data);
		if($check){
			$this->session->set_flashdata('pesan', 'Berhasil Nambah');
			redirect('forum');
		}else{
			echo "Gagal";
		}
	}

	public function hapus($id_pertanyaan){
		$check = $this->Tanya->hapus_data($id_pertanyaan);
		if($check){
			$this->session->set_flashdata('pesan', 'Berhasil dihapus');
			redirect('forum');	
		}else{
			echo "Gagal";
		}
	}
	
	public function form_edit($id_pertanyaan){
    $data['edit'] = $this->Tanya->get_data($id_pertanyaan);
    $this->load->view("template/header");
    $this->load->view('forum/form_edit',$data);
    $this->load->view("template/footer");
  }

  public function ubah(){
  	$id_pertanyaan = $this->input->post('id_pertanyaan');
  	$data = array(
  		'judul_pertanyaan' => $this->input->post('judul'),
  		'isi' => $this->input->post('isi'),
  		);
  	$this->Tanya->edit_data($id_pertanyaan,$data);
  	redirect('forum');
  }


}

/* End of file Pertanyaan.php */
/* Location: ./application/controllers/Pertanyaan.php */