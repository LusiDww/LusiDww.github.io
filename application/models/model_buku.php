<?php

class model_buku extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('buku');
    }

    public function tambah_buku($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_buku($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_buku($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_buku($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
