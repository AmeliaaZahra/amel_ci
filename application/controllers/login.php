<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
	}
	public function verifikasi()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'username' => $user ['username']
				];
				$this->session->set_userdata($data);
				redirect('admin');
			} else {
				$this->session->set_flashdata('message' , '<h2>Password salah</h2>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message' , '<h2>Username salah</h2>');
				redirect('login');
		
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<h1>Berhasil logout</h1>');
		redirect('login');
	}

}