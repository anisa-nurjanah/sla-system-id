<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('form', 'security');
		$this->load->library('form_validation');
		$this->load->model('crud_models');
		$this->load->model('security_models');
		$this->security_models->get_security();

	}
	
	public function index()
	{
		// Mengalihkan ke fungsi read
		$dt['count_ducument'] = $this->crud_models->count_document();
		$dt['count_ducument2'] = $this->crud_models->count_document2();
		$data['content'] = $this->load->view('layouts/dashboard',$dt,true);
		$this->load->view('layouts/html', $data);
	}

}
