<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaAnalyst extends CI_Controller {
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
		$data['table']   	= $this->crud_models->get_data_document2('document','id_penerus',$id_pengguna,'7')->result(); 
		$data['feedback']   = $this->crud_models->get_data_document2('document','id_penerus',$id_pengguna,'9')->result(); 
		$data['feedback2']   = $this->crud_models->get_data_document_fe('document','id_penerus',$id_pengguna,'16','6')->result();   
		$data['content'] 	= $this->load->view('Analyst/beranda_analyst',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}

	public function detail(){
		$id_history = $this->input->get('id_history');
		$id_document = $this->input->get('id_document');
		$data['history']	= $this->crud_models->get_data_document('document','id_history',$id_history)->row();
		$data['history2']	= $this->crud_models->get_data_document('document','id_document',$id_document)->result();
		$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',6)->result();  
		$data['content'] = $this->load->view('Analyst/ubah_dokumen_analyst',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}
	public function detail2(){
		$id_history = $this->input->get('id_history');
		$id_document = $this->input->get('id_document');
		$data['history']	= $this->crud_models->get_data_document('document','id_history',$id_history)->row();
		$data['history2']	= $this->crud_models->get_data_document('document','id_document',$id_document)->result();
		$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',6)->result();  
		$data['dr_analys']	= $this->crud_models->get_data_document('tb_document_analyst','id_document',$id_document)->row();
		$data['content'] = $this->load->view('Analyst/ubah_dokumen_bisnis',$data,TRUE);
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
			$data['content'] = $this->load->view('Pengelola/ubah_dokumen_pengelola',$data,TRUE);
			$this->session->set_flashdata('danger', 'Anaylst Harus Diisi !');
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

			$data2       = array(
				"id_document"   => $id_document,
				"id_pengguna"   => $id_pengguna,		
				"nama_debitur"  	=> $this->input->post('nama_debitur'),	
				"nama_group"  	=> $this->input->post('nama_group'),
				"fasilitas1"     	=> $this->input->post('fasilitas1'),
				"maximum1"  	=> $this->input->post('maximum1'),
				"fasilitas2"     	=> $this->input->post('fasilitas2'),
				"maximum2"  	=> $this->input->post('maximum2'),
				"fasilitas3"     	=> $this->input->post('fasilitas3'),
				"maximum3"  	=> $this->input->post('maximum3'),
				"fasilitas4"     	=> $this->input->post('fasilitas4'),
				"maximum4"  	=> $this->input->post('maximum4'),
				"fasilitas5"     	=> $this->input->post('fasilitas5'),
				"maximum5"  	=> $this->input->post('maximum5'),
				"nk3_check"     	=> $this->input->post('nk3_check'),
				"data_debitur_check"     	=> $this->input->post('data_debitur_check'),
				"pak_check"  	=> $this->input->post('pak_check'),
				"fia_check"     	=> $this->input->post('fia_check'),
				"ipk_check"     	=> $this->input->post('ipk_check'),
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
					redirect('BerandaAnalyst');
		
				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('BerandaAnalyst');
				}
	
			}else{
				$data_edit = array(
					"status" 		=> 8,
					"updated_at"    => date('Y-m-d H:i:s')
		
				);
				$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');
				if($this->crud_models->add_data($data,'tb_history_document')){
					$add_data = $this->crud_models->add_data($data2,'tb_document_analyst');
					$this->session->set_flashdata('info', 'Document berhasil di Update!');				
					redirect('BerandaAnalyst');
		
				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('BerandaAnalyst');
				}
	
			}
		}

	}

	public function ubah_dokumen2()
	{
		$id_pengguna 		= $this->session->userdata('npp');
		$id_document 		= $this->input->post('id_document');
		$id_history 		= $this->input->post('id_history');
		$id_dokumen_analys = $this->input->post('id_document_analys');
	
			$data       = array(
				"id_document"   => $id_document,
				"id_pengguna"   => $id_pengguna,			
				"id_penerus"  	=> $this->input->post('id_penerus'),
				"remaks"     	=> $this->input->post('remaks'),
				"created_at"    => date('Y-m-d H:i:s'),
				"updated_at"    => date('Y-m-d H:i:s')
			);

			$data2       = array(
				"id_document"   => $id_document,
				"id_pengguna"   => $id_pengguna,		
				"nama_debitur"  	=> $this->input->post('nama_debitur'),	
				"nama_group"  	=> $this->input->post('nama_group'),
				"fasilitas1"     	=> $this->input->post('fasilitas1'),
				"maximum1"  	=> $this->input->post('maximum1'),
				"fasilitas2"     	=> $this->input->post('fasilitas2'),
				"maximum2"  	=> $this->input->post('maximum2'),
				"fasilitas3"     	=> $this->input->post('fasilitas3'),
				"maximum3"  	=> $this->input->post('maximum3'),
				"fasilitas4"     	=> $this->input->post('fasilitas4'),
				"maximum4"  	=> $this->input->post('maximum4'),
				"fasilitas5"     	=> $this->input->post('fasilitas5'),
				"maximum5"  	=> $this->input->post('maximum5'),
				"nk3_check"     	=> $this->input->post('nk3_check'),
				"data_debitur_check"     	=> $this->input->post('data_debitur_check'),
				"pak_check"  	=> $this->input->post('pak_check'),
				"fia_check"     	=> $this->input->post('fia_check'),
				"ipk_check"     	=> $this->input->post('ipk_check'),
				"created_at"    => date('Y-m-d H:i:s'),
				"updated_at"    => date('Y-m-d H:i:s')
			);
	
			
			if($this->input->post('submit') == 'revisi'){
				$data_edit = array(
					"status" 		=> 8,
					"updated_at"    => date('Y-m-d H:i:s')
		
				);
				$data_edit2 = array(
					"loop" 		=> 2,
					"updated_at"    => date('Y-m-d H:i:s')
		
				);
				$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');
				$update2 = $this->crud_models->edit_data($data_edit2,$id_document,'tb_history_document');
				$update3 = $this->crud_models->edit_data($data2,$id_dokumen_analys,'tb_document_analyst');
	
				if($this->crud_models->add_data($data,'tb_history_document')){
					
					$this->session->set_flashdata('info', 'Document berhasil di revisi!');				
					redirect('BerandaAnalyst');
		
				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('BerandaAnalyst');
				}
	
			}else{
				$data_edit = array(
					"status" 		=> 20,
					"updated_at"    => date('Y-m-d H:i:s')
		
				);
				$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');
				if($this->crud_models->add_data($data,'tb_history_document')){
					//$add_data = $this->crud_models->add_data($data2,'tb_document_analyst');
					$this->session->set_flashdata('info', 'Document berhasil di selesaikan!');				
					redirect('BerandaAnalyst');
		
				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('BerandaAnalyst');
				}
	
			}
		

	}
	
	public function updatepk()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('Analyst/updatepk','',TRUE);
		$this->load->view('layouts/html', $data);
	}
	
	public function updatepencairan()
	{
		// Mengalihkan ke fungsi read
		$data['content'] = $this->load->view('Analyst/updatepencairan','',TRUE);
		$this->load->view('layouts/html', $data);
	}
}
