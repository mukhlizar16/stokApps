<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_model extends CI_Model
{
    public function tampilData()
    {
        return $this->db->get('supplier')->result();
    }

    public function saveData($data)
    {
        return $this->db->insert('supplier', $data);
    }

    public function id_supp($id)
    {
        return $this->db->get_where('supplier', ['id_supp' => $id]);
    }

    public function update($id, $data)
    {
        $this->db->where('id_supp', $id);
        $this->db->update('supplier', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_supp', $id);
        $this->db->delete('supplier');
    }
}
