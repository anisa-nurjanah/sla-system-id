<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

class Administrasi extends CI_Controller {

	public function doc_baru() {
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('admin/administrasi_dokumen_baru','', TRUE);
		$this->load->view('layouts/html', $data);
	}

	public function doc_selesai() {
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('admin/administrasi_dokumen_selesai','', TRUE);
		$this->load->view('layouts/html', $data);
	}


    public function user(){
        // Memanggil view user administrasi
        $data['content'] = $this->load->view('admin/administrasi_user', '', TRUE);
		$this->load->view('layouts/html', $data);
    }
}