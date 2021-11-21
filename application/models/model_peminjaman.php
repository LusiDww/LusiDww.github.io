<?php

class model_peminjaman extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('peminjaman');
    }

    public function tambah_peminjaman($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_peminjaman($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_peminjaman($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_peminjaman($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
