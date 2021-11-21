<?php

class model_petugas extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('admin');
    }

    public function tambah_petugas($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_petugas($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_petugas($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_petugas($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
