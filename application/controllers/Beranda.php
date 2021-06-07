<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	
	public function index()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('admin/admin_read','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}
