<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaSekkom extends CI_Controller {
	
	public function index()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('Sekkom/beranda_sekkom','',TRUE);
		$this->load->view('layouts/html', $data);
	}
	public function card()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('sekkom/detail_dokumen_sekkom','',TRUE);
		$this->load->view('layout_sekkom/html', $data);
	}
}
