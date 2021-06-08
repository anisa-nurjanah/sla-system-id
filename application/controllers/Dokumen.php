<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

class Dokumen extends CI_Controller {


    public function index(){
        // Memanggil view user administrasi
        $data['content'] = $this->load->view('dokumen', '', TRUE);
		$this->load->view('layouts/html', $data);
    }
}