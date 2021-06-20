<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	
	public function index()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('role-admin/beranda_admin','',TRUE);
		$this->load->view('layouts/html', $data);
	}
	public function insert()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('role-admin/tambah_user_insert','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}
