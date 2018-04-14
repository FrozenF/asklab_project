<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tanya extends CI_Model {

	public $data;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function tampil(){
		$this->db->order_by('id_pertanyaan', 'desc');
		$data = $this->db->get('pertanyaan')->result();
		return $data;
	}

	public function tambah_data($data){
		return $this->db->insert('pertanyaan', $data);	
	}

	public function hapus_data($id_pertanyaan){
    $this->db->where('id_pertanyaan', $id_pertanyaan);
    return $this->db->delete('pertanyaan');
  }

  public function get_data($id_pertanyaan){
    $this->db->where('id_pertanyaan', $id_pertanyaan);
    $data = $this->db->get('pertanyaan')->row();
    return $data;
  }

  public function edit_data($id_pertanyaan,$data){
    $this->db->where('id_pertanyaan', $id_pertanyaan);
    $data = $this->db->update('pertanyaan', $data);
    return $data;
  }


}

/* End of file pertanyaan.php */
/* Location: ./application/models/pertanyaan.php */