<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekkom extends CI_Controller {
	
	public function index()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('sekkom/sekkom_read','',TRUE);
		$this->load->view('layout_sekkom/html', $data);
	}
}
