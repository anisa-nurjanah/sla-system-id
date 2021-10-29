<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaPimpinan extends CI_Controller {
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
		$data['table']   	= $this->crud_models->get_data_document2('document','id_penerus',$id_pengguna,'5')->result(); 
		$data['feedback']   = $this->crud_models->get_data_document3('document','id_penerus',$id_pengguna,'9','6')->result();
		$data['feedback2']   = $this->crud_models->get_data_document_fe('document','id_penerus',$id_pengguna,'13','4')->result();   
		$data['content'] 	= $this->load->view('Pimpinan/beranda_pimpinan',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}

	public function detail(){
		$id_history = $this->input->get('id_history');
		$id_document = $this->input->get('id_document');
		$data['history']	= $this->crud_models->get_data_document('document','id_history',$id_history)->row();
		$data['history2']	= $this->crud_models->get_data_document('document','id_document',$id_document)->result();
		$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',6)->result();  
		$data['content'] = $this->load->view('Pimpinan/ubah_dokumen_pimpinan',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}

	public function detail2(){
		$id_history = $this->input->get('id_history');
		$id_document = $this->input->get('id_document');
		$data['history']	= $this->crud_models->get_data_document('document','id_history',$id_history)->row();
		$data['history2']	= $this->crud_models->get_data_document('document','id_document',$id_document)->result();
		$data['dr_analys']	= $this->crud_models->get_data_document('tb_document_analyst','id_document',$id_document)->result();
		$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',8)->result();  
		$data['content'] = $this->load->view('Pimpinan/ubah_dokumen_analys',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}

	public function detail3(){
		$id_history = $this->input->get('id_history');
		$id_document = $this->input->get('id_document');
		$data['history']	= $this->crud_models->get_data_document('document','id_history',$id_history)->row();
		$data['history2']	= $this->crud_models->get_data_document('document','id_document',$id_document)->result();
		$data['dr_analys']	= $this->crud_models->get_data_document('tb_document_analyst','id_document',$id_document)->result();
		$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',6)->result();  
		$data['content'] = $this->load->view('Pimpinan/ubah_dokumen_bisnis',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}
	public function ubah_dokumen()
	{
		$id_pengguna 		= $this->session->userdata('npp');
		$id_document 		= $this->input->post('id_document');
		$id_history 		= $this->input->post('id_history');
		$this->form_validation->set_rules('id_penerus', 'Penerus', 'required');
		if ($this->form_validation->run() == FALSE){
			$data['history']	= $this->crud_models->get_data_document('document','id_history',$id_history)->row();
			$data['history2']	= $this->crud_models->get_data_document('document','id_document',$id_document)->result();
			$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',6)->result();  
			$data['content'] = $this->load->view('Pimpinan/ubah_dokumen_pimpinan',$data,TRUE);
			$this->session->set_flashdata('danger', 'Pimpinan Harus Diisi !');
			$this->load->view('layouts/html', $data);
		}
		else{
			$data       = array(
				"id_document"   => $id_document,
				"id_pengguna"   => $id_pengguna,			
				"id_penerus"  	=> $this->input->post('id_penerus'),
				"remaks"     	=> $this->input->post('remaks'),
				"created_at"    => date('Y-m-d H:i:s'),
				"updated_at"    => date('Y-m-d H:i:s')
			);
	
			
			if($this->input->post('submit') == 'tolak'){
				$data_edit = array(
					"status" 		=> 15,
					"updated_at"    => date('Y-m-d H:i:s')
		
				);
				$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');
	
				if($this->crud_models->add_data($data,'tb_history_document')){
					$this->session->set_flashdata('info', 'Document berhasil di tolak!');				
					redirect('BerandaPimpinan');
		
				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('BerandaPimpinan');
				}
	
			}else{
				$data_edit = array(
					"status" 		=> 7,
					"updated_at"    => date('Y-m-d H:i:s')
		
				);
				$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');
				if($this->crud_models->add_data($data,'tb_history_document')){
					$this->session->set_flashdata('info', 'Document berhasil di Update!');				
					redirect('BerandaPimpinan');
		
				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('BerandaPimpinan');
				}
	
			}
		}

	}

	public function ubah_dokumen2()
	{
		$id_pengguna 		= $this->session->userdata('npp');
		$id_document 		= $this->input->post('id_document');
		$id_history 		= $this->input->post('id_history');
		$this->form_validation->set_rules('id_penerus', 'Penerus', 'required');
		if ($this->form_validation->run() == FALSE){
			$data['history']	= $this->crud_models->get_data_document('document','id_history',$id_history)->row();
			$data['history2']	= $this->crud_models->get_data_document('document','id_document',$id_document)->result();
			$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',6)->result();  
			$data['content'] = $this->load->view('Pimpinan/ubah_dokumen_pimpinan',$data,TRUE);
			$this->session->set_flashdata('danger', 'Pimpinan Harus Diisi !');
			$this->load->view('layouts/html', $data);
		}
		else{
			$data       = array(
				"id_document"   => $id_document,
				"id_pengguna"   => $id_pengguna,			
				"id_penerus"  	=> $this->input->post('id_penerus'),
				"remaks"     	=> $this->input->post('remaks'),
				"created_at"    => date('Y-m-d H:i:s'),
				"updated_at"    => date('Y-m-d H:i:s')
			);
	
			
			if($this->input->post('submit') == 'tolak'){
				$data_edit = array(
					"status" 		=> 15,
					"updated_at"    => date('Y-m-d H:i:s')
		
				);
				$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');
	
				if($this->crud_models->add_data($data,'tb_history_document')){
					$this->session->set_flashdata('info', 'Document berhasil di tolak!');				
					redirect('BerandaPimpinan');
		
				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('BerandaPimpinan');
				}
	
			}else{
				$data_edit = array(
					"status" 		=> 10,
					"updated_at"    => date('Y-m-d H:i:s')
		
				);
				$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');
				if($this->crud_models->add_data($data,'tb_history_document')){
					$this->session->set_flashdata('info', 'Document berhasil di Update!');				
					redirect('BerandaPimpinan');
		
				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('BerandaPimpinan');
				}
	
			}
		}

	}

	public function ubah_dokumen3()
	{
		$id_pengguna 		= $this->session->userdata('npp');
		$id_document 		= $this->input->post('id_document');
		$id_history 		= $this->input->post('id_history');
		$this->form_validation->set_rules('id_penerus', 'Penerus', 'required');
		if ($this->form_validation->run() == FALSE){
			$data['history']	= $this->crud_models->get_data_document('document','id_history',$id_history)->row();
			$data['history2']	= $this->crud_models->get_data_document('document','id_document',$id_document)->result();
			$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',6)->result();  
			$data['content'] = $this->load->view('Pimpinan/ubah_dokumen_pimpinan',$data,TRUE);
			$this->session->set_flashdata('danger', 'Pimpinan Harus Diisi !');
			$this->load->view('layouts/html', $data);
		}
		else{
			$data       = array(
				"id_document"   => $id_document,
				"id_pengguna"   => $id_pengguna,			
				"id_penerus"  	=> $this->input->post('id_penerus'),
				"remaks"     	=> $this->input->post('remaks'),
				"created_at"    => date('Y-m-d H:i:s'),
				"updated_at"    => date('Y-m-d H:i:s')
			);
	
			
			if($this->input->post('submit') == 'tolak'){
				$data_edit = array(
					"status" 		=> 15,
					"updated_at"    => date('Y-m-d H:i:s')
		
				);
				$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');
	
				if($this->crud_models->add_data($data,'tb_history_document')){
					$this->session->set_flashdata('info', 'Document berhasil di tolak!');				
					redirect('BerandaPimpinan');
		
				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('BerandaPimpinan');
				}
	
			}else{
				$data_edit = array(
					"status" 		=> 14,
					"loop" 		=> 1,
					"updated_at"    => date('Y-m-d H:i:s')
		
				);
				$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');
				if($this->crud_models->add_data($data,'tb_history_document')){
					$this->session->set_flashdata('info', 'Document berhasil di Update!');				
					redirect('BerandaPimpinan');
		
				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('BerandaPimpinan');
				}
	
			}
		}

	}

	public function history(){
		$id_pengguna 		= $this->session->userdata('npp');
		$data['table']   	= $this->crud_models->get_data_document('document','id_pengguna',$id_pengguna)->result(); 
		$data['content'] 	= $this->load->view('Pimpinan/history',$data,TRUE);
		$this->load->view('layouts/html', $data);
		
	}
}
