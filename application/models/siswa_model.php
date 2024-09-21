<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_model extends CI_Model {

	public function getsiswa()
	{
		return $this->db->get('siswa')->result_array();
	}

	public function tambahsiswa()
	{
			$data =
			[
					"nama" => $this->input->post('nama' , true),
					"alamat" => $this->input->post('alamat' , true),
					"no_telp" => $this->input->post('no_telp' , true)
			];

			$this->db->insert('siswa', $data);
	}

	public function getsiswaByNIS($NIS)
	{
		return $this->db->get_where('siswa' , ['NIS' => $NIS])->row_array();
	}
	
}