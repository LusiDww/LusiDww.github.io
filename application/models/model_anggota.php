<?php

class model_anggota extends CI_Model{
    public function tampil_data(){
        return $this->db->get('member');
    }

    public function tambah_anggota($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_anggota($where,$table){
        return $this->db->get_where($table,$where); 
    }

    public function update_anggota($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_anggota($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}