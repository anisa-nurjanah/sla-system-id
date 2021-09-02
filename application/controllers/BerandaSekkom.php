<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaSekkom extends CI_Controller {
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
		$data['table']   	= $this->crud_models->get_data_document('document','id_pengguna',$id_pengguna)->result();  
		$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',3)->result();  
		$data['content'] 	= $this->load->view('Sekkom/beranda_sekkom',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}
	public function card()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('sekkom/detail_dokumen_sekkom','',TRUE);
		$this->load->view('layout_sekkom/html', $data);
	}

	public function add_document(){
		$id_pengguna 		= $this->session->userdata('npp');
		$config =  array(
			'upload_path'     => "./assets/document/",
			'allowed_types'   => "*",
			'encrypt_name'    => False, 
		);
		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload('file_nk3')) {
			$this->session->set_flashdata('danger', 'File Harus Di Upload !');				
            redirect('BerandaSekkom');

		}else{
			$upload_data  	=$this->upload->data();
			$nama_file    	=$upload_data['file_name'];
			// add ke tabel document
			$data1       = array(
				"no_document"	   	=> $this->input->post('no_document'),
				"debitur"          	=> $this->input->post('debitur'),
				"id_pengguna"  		=> $id_pengguna,
				"file_nk3"       	=> $nama_file,
				"status"        	=> '3',
				"created_at"        => date('Y-m-d H:i:s'),
				"updated_at"      	=> date('Y-m-d H:i:s')
			);
			$insert1 = $this->crud_models->add_data($data1,'tb_document');
			//var_dump($insert1);die();
			// add ke table history
			$data2       = array(
				"id_document"   => $insert1,
				"id_pengguna"   => $id_pengguna,
				"id_penerus"  	=> $this->input->post('id_penerus'),
				"remaks"     	=> 'Upload File NK3',
				"created_at"    => date('Y-m-d H:i:s'),
				"updated_at"    => date('Y-m-d H:i:s')
			);

			if($this->crud_models->add_data($data2,'tb_history_document')){
				$this->session->set_flashdata('info', 'Document berhasil di Ditambahkan!');				
				redirect('BerandaSekkom');

			}else{
				$this->session->set_flashdata('danger', 'kesalahan menginput data');				
				redirect('BerandaSekkom');
			}
		}
	}


	public function edit_document(){
		$id_pengguna 		= $this->session->userdata('npp');
		$id_document 		= $this->input->post('id_document');
		$id_history 		= $this->input->post('id_history');
		$config =  array(
			'upload_path'     => "./assets/document/",
			'allowed_types'   => "*",
			'encrypt_name'    => False, 
		);
		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		
		if ( ! $this->upload->do_upload('file_nk3')) {
			$nama_file    	=$this->input->post('file_exisisting');
			

		}else{
			$upload_data  	=$this->upload->data();
			$nama_file    	=$upload_data['file_name'];
			unlink(base_url('assets/document/'.$this->input->post('file_exisisting')));
			
		}

		
		// add ke tabel document
		$data1       = array(
			"no_document"	   	=> $this->input->post('no_document'),
			"debitur"          	=> $this->input->post('debitur'),
			"id_pengguna"  		=> $id_pengguna,
			"file_nk3"       	=> $nama_file,
			"status"        	=> '3',
			"updated_at"      	=> date('Y-m-d H:i:s')
		);
		
		$insert1 = $this->crud_models->edit_data($data1,$id_document,'tb_document');
		//var_dump($insert1);die();
		// add ke table history
		$data2       = array(
			"id_pengguna"   => $id_pengguna,
			"id_penerus"  	=> $this->input->post('id_penerus'),
			"remaks"     	=> 'Upload File NK3',
			"updated_at"    => date('Y-m-d H:i:s')
		);

		if($this->crud_models->edit_data($data2,$id_history,'tb_history_document')){
			$this->session->set_flashdata('info', 'Document berhasil di Update!');				
			redirect('BerandaSekkom');

		}else{
			$this->session->set_flashdata('danger', 'kesalahan menginput data');				
			redirect('BerandaSekkom');
		}
	}

	public function delete_document(){
		$id_document 		= $this->input->post('id_document');
		$id_history 		= $this->input->post('id_history');
		$delete1 			=$this->crud_models->delete_data($id_document,'tb_document');
		
		if($this->crud_models->delete_data($id_history,'tb_history_document')){
			unlink(base_url('assets/document/'.$this->input->post('file_exisisting')));
			$this->session->set_flashdata('info', 'data berhasil di dihapus!');				
			redirect('BerandaSekkom');

		}else{
			$this->session->set_flashdata('danger', 'kesalahan menghapus data');				
			redirect('BerandaSekkom');
		}

		

	}
}
