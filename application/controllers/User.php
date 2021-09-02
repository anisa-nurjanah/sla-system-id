<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('form', 'security');
		$this->load->library('form_validation');
		$this->load->model('crud_models');
		$this->load->model('security_models');
		$this->load->model('user_models');

	}

	public function login() 
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('User/login','',True);
		$this->load->view('User/login', $data);
	}
	
	public function reset_password()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('User/reset_password','',TRUE);
		$this->load->view('layouts/html', $data);
	}

	public function prosess_login(){
		$username 	= xss_clean($this->input->post('username'));
        $password 	= xss_clean($this->input->post('password'));
		$this->user_models->getlogin($username, $password);
	}

	public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('info', 'logout sukses');
        redirect(base_url('/'));
    }
}