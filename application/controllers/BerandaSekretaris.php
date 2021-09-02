<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaSekretaris extends CI_Controller {
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

		$id_pengguna 		= $this->session->userdata('npp');
		$data['table']   	= $this->crud_models->get_data_document2('document','id_penerus',$id_pengguna,'3')->result(); 
		$data['feedback']   = $this->crud_models->get_data_document3('document','id_penerus',$id_pengguna,'11','8')->result();  
		$data['content'] 	= $this->load->view('Sekretaris/beranda_sekretaris',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}

	public function detail($id){
		$data['history']	= $this->crud_models->get_data_document('document','id_history',$id)->row();
		$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',4)->result();  
	
		$data['content'] = $this->load->view('Sekretaris/ubah_dokumen_sekretaris',$data,TRUE);
		$this->load->view('layouts/html', $data);
	}

	public function detail2(){
		$id_history = $this->input->get('id_history');
		$id_document = $this->input->get('id_document');
		$data['history']	= $this->crud_models->get_data_document('document','id_history',$id_history)->row();
		$data['history2']	= $this->crud_models->get_data_document('document','id_document',$id_document)->result();
		$data['pengguna']   = $this->crud_models->get_data_document('tb_pengguna','posisi',4)->result(); 	
		$data['content'] = $this->load->view('Sekretaris/ubah_dokumen_sekretaris_h',$data,TRUE);
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

		$data_edit = array(
			"status" 		=> 4,
			"updated_at"    => date('Y-m-d H:i:s'),
			"date_document"     	=> $this->input->post('date_document'),

		);

		$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');

		if($this->crud_models->add_data($data,'tb_history_document')){
			$this->session->set_flashdata('info', 'Document berhasil di Update!');				
			redirect('BerandaSekretaris');

		}else{
			$this->session->set_flashdata('danger', 'kesalahan menginput data');				
			redirect('BerandaSekretaris');
		}
	}

	public function ubah_dokumen2(){
		$id_pengguna 		= $this->session->userdata('npp');
		$id_document 		= $this->input->post('id_document');
		$id_history 		= $this->input->post('id_history');

		$data       = array(
			"id_document"   => $id_document,
			"id_pengguna"   => $id_pengguna,			
			"id_penerus"  	=> $this->input->post('id_penerus'),
			"remaks"     	=> $this->input->post('remaks'),		
			"created_at"    => date('Y-m-d H:i:s'),
			"updated_at"    => date('Y-m-d H:i:s'),
			"loop"     	=> '1',	
		);

		$data_edit = array(
			"status" 		=> 12,
			"updated_at"    => date('Y-m-d H:i:s'),
			"date_document"     	=> $this->input->post('date_document'),

		);

		$update1 = $this->crud_models->edit_data($data_edit,$id_document,'tb_document');

		if($this->crud_models->add_data($data,'tb_history_document')){
			$this->session->set_flashdata('info', 'Document berhasil di Update!');				
			redirect('BerandaSekretaris');

		}else{
			$this->session->set_flashdata('danger', 'kesalahan menginput data');				
			redirect('BerandaSekretaris');
		}

	}

	public function history(){
		$id_pengguna 		= $this->session->userdata('npp');
		$data['table']   	= $this->crud_models->get_data_document('document','id_pengguna',$id_pengguna)->result();  
		$data['content'] 	= $this->load->view('Sekretaris/history',$data,TRUE);
		$this->load->view('layouts/html', $data);

	}
}
