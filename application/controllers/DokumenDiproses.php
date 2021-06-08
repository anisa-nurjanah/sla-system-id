<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

class DokumenDiproses extends CI_Controller {

	public function read()
	{
		$data['content'] = $this->load->view('role-admin/dokumen_diproses','',TRUE);
		$this->load->view('layouts/html', $data);
	}

	public function detail(){
		$data['content'] = $this->load->view('role-admin/dokumen_diproses_detail','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}