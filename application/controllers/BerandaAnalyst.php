<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaAnalyst extends CI_Controller {
	
	public function index()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('Analyst/beranda_analyst','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}
