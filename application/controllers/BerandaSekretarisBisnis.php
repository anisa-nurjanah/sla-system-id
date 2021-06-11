<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaSekretarisBisnis extends CI_Controller {
	
	public function index()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('SekretarisBisnis/beranda_sekretaris_bisnis','',TRUE);
		$this->load->view('layouts/html', $data);
	}
	public function card()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('SekretarisBisnis/detail_dokumen_sekretaris_bisnis','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}
