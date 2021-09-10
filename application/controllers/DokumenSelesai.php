<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

class DokumenSelesai extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('form', 'security');
		$this->load->library('form_validation');
		$this->load->model('crud_models');
		$this->load->model('security_models');
		$this->security_models->get_security();

	}

	public function read()
	{
		// Mengalihkan ke fungsi read
		$data['table']   	= $this->crud_models->get_data_document('document','status',20)->result();  
		$data['content'] = $this->load->view('role-admin/dokumen_selesai',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}
	public function detail(){
		$data['content'] = $this->load->view('role-admin/dokumen_selesai_detail','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}