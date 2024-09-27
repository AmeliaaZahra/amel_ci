<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar extends CI_Controller {

public function index()
 {
    $this->load->view('template/header');
    $this->load->view('daftar');
    $this->load->view('template/footer');
 }

 public function simpan()
 {
        $this->load->model('user_model');

		$data['user'] = $this->user_model->simpan_user();

        $this->session->set_flashdata('message', '<h1>user berhasil ditambahkan</h1>');
		redirect('login');
	}
 
}