<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaSekretarisBisnis extends CI_Controller {
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

		$id_pengguna 		= $this->session->userdata('npp');
		$data['table']   	= $this->crud_models->get_data_document2('document','id_penerus',$id_pengguna,'10')->result(); 
		$data['content'] 	= $this->load->view('SekretarisBisnis/beranda_sekretaris_bisnis',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}

	public function detail(){
		$id_history = $this->input->get('id_history');
		$id_document = $this->input->get('id_document');
		$data['history']	= $this->crud_models->get_data_document('document','id_history',$id_history)->row();
		$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',3)->result();  
	
		$data['dr_analys']	= $this->crud_models->get_data_document('tb_document_analyst','id_document',$id_document)->result();
		$data['content'] = $this->load->view('SekretarisBisnis/ubah_dokumen_sekretarisbisnis',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}
	public function ubah_dokumen()
	{
		$id_pengguna 		= $this->session->userdata('npp');
		$id_document 		= $this->input->post('id_document');
		$id_history 		= $this->input->post('id_history');

		$data       = array(
			"id_document"   => $id_document,
			"id_pengguna"   => $id_pengguna,			
			"id_penerus"  	=> $this->input->post('id_penerus'),
			"remaks"     	=> $this->input->post('remaks'),
			"created_at"    => date('Y-m-d H:i:s'),
			"updated_at"    => date('Y-m-d H:i:s')
		);



		$config =  array(
			'upload_path'     => "./assets/document/",
			'allowed_types'   => "*",
			'encrypt_name'    => False, 
		);
		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload('file_2')) {			
			$data_edit = array(
				"status" 		=> 11,
				"no_skk" 		=>  $this->input->post('no_skk'),
				"updated_at"    => date('Y-m-d H:i:s')

			);
			//var_dump('no file');die();
			

		}else{
			$upload_data  	=$this->upload->data();
			$nama_file    	=$upload_data['file_name'];
			$data_edit = array(
				"status" 		=> 11,
				"file_2"		=>$nama_file,
				"no_skk" 		=>  $this->input->post('no_skk'),
				"updated_at"    => date('Y-m-d H:i:s')

			);
			//dd('add file');
			//var_dump('add file');die();
		}

		

		$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');

		if($this->crud_models->add_data($data,'tb_history_document')){
			$this->session->set_flashdata('info', 'Document berhasil di Update!');				
			redirect('BerandaSekretarisBisnis');

		}else{
			$this->session->set_flashdata('danger', 'kesalahan menginput data');				
			redirect('BerandaSekretarisBisnis');
		}
	}
	public function history(){
		$id_pengguna 		= $this->session->userdata('npp');
		$data['table']   	= $this->crud_models->get_data_document('document','id_pengguna',$id_pengguna)->result(); 
		$data['content'] 	= $this->load->view('SekretarisBisnis/history',$data,TRUE);
		$this->load->view('layouts/html', $data);
		
	}
}
