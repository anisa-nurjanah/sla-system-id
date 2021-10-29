<?php
defined("BASEPATH") OR exit ("No direct script access allowed");

class Administrasi extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->helper('form', 'security');
		$this->load->library('form_validation');
		$this->load->model('crud_models');
		$this->load->model('security_models');
		$this->security_models->get_security();

	}


    public function user(){
        // Memanggil view user administrasi
      
        $data['table']   = $this->crud_models->get_data_user()->result();  
        $data['level']   = $this->crud_models->get_all_data('tb_level_user')->result();  
        $data['content'] = $this->load->view('role-admin/administrasi_user', $data, TRUE);
		$this->load->view('layouts/html', $data);
    }

    public function add_user(){
        $data = array(
            "npp"	        => $this->input->post('npp'),
            "nama"          => $this->input->post('nama'),
            "posisi"  => $this->input->post('posisi'),
            "password"      =>md5($this->input->post('password'))
        );

        if($this->crud_models->add_data($data,'tb_pengguna')){
            $this->session->set_flashdata('info', 'data berhasil di tambah!');				
            redirect('Administrasi/user');

        }else{
            $this->session->set_flashdata('danger', 'kesalahan menginput data');				
            redirect('Administrasi/user');
        }

    }

    public function edit_user(){
        $id 		= $this->input->post('id');
        $data       = array(
                        "npp"	        => $this->input->post('npp'),
                        "nama"          => $this->input->post('nama'),
                        "posisi"  => $this->input->post('posisi'),
                        "password"      =>md5($this->input->post('password'))
                    );

        if($this->crud_models->edit_data($data,$id,'tb_pengguna')){
            $this->session->set_flashdata('info', 'data berhasil di update!');				
            redirect('Administrasi/user');

        }else{
            $this->session->set_flashdata('danger', 'kesalahan menginput data');				
            redirect('Administrasi/user');
        }

    }

    public function delete_user(){
        $id 		= $this->input->post('id');
        if($this->crud_models->delete_data($id,'tb_pengguna')){
            $this->session->set_flashdata('info', 'data berhasil di update!');				
            redirect('Administrasi/user');

        }else{
            $this->session->set_flashdata('danger', 'kesalahan menginput data');				
            redirect('Administrasi/user');
        }

    }

    function converPassword($getDate){
        $arrDate    = explode("-", $getDate);
        if(is_array($arrDate)){
            $date = $arrDate[2].$arrDate[1].$arrDate[0];
        }      
        return md5($date);
    }
}