<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

class Sekkom_doccument_proses extends CI_Controller {

	public function read()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('sekkom/doccument_proses','',TRUE);
		$this->load->view('layout_sekkom/html', $data);
	}
}