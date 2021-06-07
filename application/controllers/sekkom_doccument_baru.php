<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

class Sekkom_doccument_baru extends CI_Controller {

	public function read()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('sekkom/doccument_baru','',TRUE);
		$this->load->view('layout_sekkom/html', $data);
	}
}