<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//

	class User_models extends CI_Model{

		public function getlogin($username, $password){
			$password 	= md5($password);
			$this->db->where('npp', $username);
			$this->db->where('password', $password);
			$querry 	= $this->db->get('tb_pengguna');
			if($querry->num_rows()>0){
					foreach ($querry->result() as $row) {
						$sess = array(
                                        'npp' => $row->npp,
                                        'nama' => $row->nama,
                                        'password' => $row->password,
                                        'posisi'   => $row->posisi
									);
						$this->session->set_userdata($sess);
						$this->session->set_flashdata('info', 'login sukses');
						redirect('beranda');
					}
			}else{
                $this->session->set_flashdata('danger', 'username dan password salah');
                redirect('/User/login');
			} 

		}
    }