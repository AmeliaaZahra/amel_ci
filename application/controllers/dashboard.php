<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function v_dashboard()
	{
		$this->load->view('v_dashboard');
	}
    public function tampil_about()
	{
		$this->load->view('v_about');
	}
}
