<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

class DokumenDiproses extends CI_Controller {
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
		$data['table']   	= $this->crud_models->get_all_data('document')->result();  
		$data['content'] = $this->load->view('role-admin/dokumen_diproses',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}

	public function detail($id_document){
		$data['document']	= $this->crud_models->get_detail_document($id_document)->row();
		$data['history']	=  $this->crud_models->get_detail_document($id_document)->result();
		
		$data['content'] = $this->load->view('role-admin/dokumen_diproses_detail',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}
}