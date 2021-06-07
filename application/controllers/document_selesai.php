<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

class Document_selesai extends CI_Controller {

	public function read()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('admin/document_selesai','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}