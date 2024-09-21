<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$this->load->model('siswa_model');
		$data['siswa'] = $this->siswa_model->getsiswa();

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin' , $data);
		$this->load->view('template/footer');
	}
	 public function hapus($NIS){
			$this->db->delete('siswa', ['NIS' => $NIS]);
			redirect('admin');
	 }
	 public function edit($NIS){

		$this->load->model('siswa_model');
		$data['edit'] = $this->siswa_model->getsiswaByNIS($NIS);
		$data['alamat'] = ['pekalongan', 'batang', 'tegal', 'pemalang'];

		$this->load->view('template/header');
		$this->load->view('edit_siswa', $data);
		$this->load->view('template/footer');
	 }
	 public function update()
	 {
		$data =
		[
			"Nama" => $this->input->post('nama', true),
			"Alamat" => $this->input->post('alamat', true),
			"No_telp" => $this->input->post('no_telp', true)
		];
		$this->db->where('NIS', $this->input->post('NIS'));
		$this->db->update('siswa', $data);
		redirect('admin');
	 }
}