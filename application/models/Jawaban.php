<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jawaban extends CI_Model {

	public $data;

	public function __construct()
	{
		parent::__construct();
	}

	public function tampil($id_pertanyaan)
	{
		$this->db->where('pertanyaan_id', $id_pertanyaan);
		$data = $this->db->get('jawaban')->result();
		return $data;
	}

	public function tambah_data($isi_jawaban)
	{
		return $this->db->insert('jawaban', $isi_jawaban);
	}

	public function hapus_data($id_jawaban)
	{
		$this->db->where('id_jawaban', $id_jawaban);
		return $this->db->delete('jawaban');
	}

	public function get_data($id_jawaban)
	{
		$this->db->where('id_jawaban', $id_jawaban);
		$data = $this->db->get('jawaban')->row();
		return $data;
	}

	public function edit_data($id_jawaban,$data)
	{
		$this->db->where('id_jawaban', $id_jawaban);
		return $this->db->update('jawaban', $data);
	}

}

/* End of file Jawaban.php */
/* Location: ./application/models/Jawaban.php */