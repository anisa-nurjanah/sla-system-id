<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaSekretaris extends CI_Controller {
	
	public function index()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('Sekretaris/beranda_sekretaris','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}
