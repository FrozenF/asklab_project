<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thread extends CI_Model {

	public $data;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function tampil()
	{
		# code...
		$data = $this->db->get('thread')->result();
		return $data;
	}

	public function tambah_data($data)
	{
		return $this->db->insert('thread', $data);
	}

	public function hapus_data($id_thread){
		$this->db->where('id_thread', $id_thread);
		return $this->db->delete('thread');
	}

	public function get_data($id_thread)
	{
		$this->db->where('id_thread', $id_thread);
		$data = $this->db->get('thread')->row();
		return $data;
	}

	public function edit_data($id_thread,$data)
	{
		$this->db->where('id_thread', $id_thread);
		return $this->db->update('thread', $data);
	}
	
}

/* End of file Thread.php */
/* Location: ./application/models/Thread.php */