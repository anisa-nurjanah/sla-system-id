<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaDGM extends CI_Controller {
	
	public function index()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('DGM/beranda_dgm','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}
