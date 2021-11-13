<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Crud_models extends CI_Model
{

    public function get_all_data($tbl){
        $this->db->select('*');
        $this->db->from($tbl);
        return $this->db->get();
    }

    public function get_data_document($tbl,$field,$value){
        $this->db->select('*');
        $this->db->where($field,$value);
        $this->db->from($tbl);
        return $this->db->get();
    }

    public function get_data_document2($tbl,$field,$value,$status){
        $this->db->select('*');
        $this->db->where($field,$value);
        $this->db->where('status',$status);
        $this->db->from($tbl);
        return $this->db->get();
    }

     public function get_data_document3($tbl,$field,$value,$status,$posisi){
        $this->db->select('*');
        $this->db->where($field,$value);
        $this->db->where('status',$status);
        $this->db->where('posisi_pengguna',$posisi);
        $this->db->from($tbl);
        return $this->db->get();
    }
    public function get_data_document_fe($tbl,$field,$value,$status,$posisi){
        $this->db->select('*');
        $this->db->where($field,$value);
        $this->db->where('status',$status);
        $this->db->where('loop',1);
        $this->db->where('posisi_pengguna',$posisi);
        $this->db->from($tbl);
        return $this->db->get();
    }

    public function get_level_user($tbl,$field,$value){
        $this->db->select('*');
        $this->db->where($field,$value);
        $this->db->from($tbl);
        return $this->db->get();
    }
    
    public function add_data($data,$tbl){
        $this->db->insert($tbl,$data);
        return $this->db->insert_id();
    }

    public function edit_data($data,$id,$tbl){
        $this->db->where('id',$id);
        return $this->db->update($tbl,$data);

    }
    public function edit_data2($data,$id,$tbl){
        $this->db->where('id_document',$id);
        return $this->db->update($tbl,$data);

    }

    public function delete_data($id,$tbl){
        $this->db->where('id',$id);
        return $this->db->delete($tbl);

    }

    public function insert_batch($data,$tbl){
        return $this->db->insert_batch($tbl, $data); 
    }


    public function get_data_user(){
        $this->db->select('a.*, b.nama_posisi');
        $this->db->from('tb_pengguna a');
        $this->db->join('tb_level_user b', 'a.posisi = b.posisi','left');
		return $this->db->get();
    }

    public function count_document(){
        $query = $this->db->query('SELECT * FROM tb_document WHERE status <> 15');
        return $query->num_rows();
    }
    public function count_document2(){
        $query = $this->db->query('SELECT * FROM tb_document WHERE status = 15');
        return $query->num_rows();
    }

    public function get_detail_document($id_document){
        $this->db->select('a.*, b.nama_posisi');
        $this->db->from('document a');
        $this->db->where('a.id_document',$id_document);
        $this->db->join('tb_level_user b', 'a.posisi_pengguna = b.posisi','left');
		return $this->db->get();

    }
    
}