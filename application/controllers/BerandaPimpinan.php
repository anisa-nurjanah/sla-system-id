<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaPimpinan extends CI_Controller {
	
	public function index()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('Pimpinan/beranda_pimpinan','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}