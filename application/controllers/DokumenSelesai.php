<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

class DokumenSelesai extends CI_Controller {

	public function read()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('role-admin/dokumen_selesai','',TRUE);
		$this->load->view('layouts/html', $data);
	}
	public function detail(){
		$data['content'] = $this->load->view('role-admin/dokumen_selesai_detail','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}