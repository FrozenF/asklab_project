<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {

	public $id;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jawaban');
		$this->load->model('Tanya');
		$this->load->helper('date');
	}

	public function awalan($id_pertanyaan)
	{
		$data1['pertanyaan'] = $this->Tanya->get_data($id_pertanyaan);
		$data2['jawaban'] = $this->Jawaban->tampil($id_pertanyaan);
		$this->load->view('template/header');
		$this->load->view('comment/pertanyaan', $data1);
		$this->load->view('comment/jawaban', $data2);
		$this->load->view('comment/form_jawaban', $data1);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$id = $this->input->post('id_pertanyaan');
		$isi_jawaban = array(
			'isi_jawaban' => $this->input->post('isi_jawaban'),
			'pertanyaan_id' => $this->input->post('id_pertanyaan')
		 );		
		$check = $this->Jawaban->tambah_data($isi_jawaban);
		if($check){
			$this->session->set_flashdata('pesan', 'Berhasil Nambah');
			redirect('comment/'.$id);
		}else{
			echo "Gagal";
		}
	}

	public function hapus($id_jawaban, $id_pertanyaan)
	{
		$check = $this->Jawaban->hapus_data($id_jawaban);
		if($check){
			$this->session->set_flashdata('pesan', 'Berhasil Hapus');
			redirect('comment/'.$id_pertanyaan);
		}else{
			echo "Gagal";
		}
	}

	public function form_edit($id_jawaban, $id_pertanyaan){
		$data['edited'] = $this->Jawaban->get_data($id_jawaban);
		$data1['pertanyaan'] = $this->Tanya->get_data($id_pertanyaan);
		$this->load->view('template/header');
		$this->load->view('comment/pertanyaan', $data1);
		$this->load->view('comment/form_edit',$data);
		$this->load->view('template/footer');
	}

	public function ubah()
	{
		$id_jawaban = $this->input->post('id_jawaban');
		$id_pertanyaan = $this->input->post('id_pertanyaan');
		$data = array(
			'isi_jawaban' => $this->input->post('isi_jawaban'),  
		);
		$check = $this->Jawaban->edit_data($id_jawaban,$data);
		if($check){
			$this->session->set_flashdata('pesan', 'Berhasil Edit');
			redirect('comment/'.$id_pertanyaan);
		}else{
			echo "Gagal";
		}
	}
}

/* End of file Comment.php */
/* Location: ./application/controllers/Comment.php */