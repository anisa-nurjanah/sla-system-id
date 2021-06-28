<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

class DokumenBaru extends CI_Controller {


    public function index(){
        // Memanggil view user administrasi
        $data['content'] = $this->load->view('dokumen_baru', '', TRUE);
		$this->load->view('layouts/html', $data);
    }
}