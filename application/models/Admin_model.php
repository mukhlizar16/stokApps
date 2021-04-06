<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_product()
    {
    	$this->db->select('p.nama_produk as nama_produk, k.nama_kategori as kategori,
    					j.nama_jenis as jenis, p.deskripsi as deskripsi, p.foto as foto');
    	$this->db->from('produk as p');
    	$this->db->join('kategori as k', 'k.id = p.kategori_id', 'left');
    	$this->db->join('jenis as j', 'j.id = p.jenis_id', 'left');
    	return $this->db->get();
    }

    public function get_kategori()
	{
		return $this->db->get('kategori');
	}

	public function add_category($data)
	{
		return $this->db->insert('kategori', $data);
	}

	public function delete_category($id)
	{
		return $this->db->delete('kategori', ['id' => $id]);
	}

	public function save_jenis($data, $kat)
	{
		$data['kode_kategori'] = $kat;
		return $this->db->insert('jenis', $data);
	}

	public function get_kategoriData()
	{
		return $this->db->get('kategori');
	}

	public function get_jenisData()
	{
		return $this->db->get('jenis');
	}

	public function add_supplier($data)
	{
		return $this->db->insert('supplier', $data);
	}

	public function get_supplierData()
	{
		$this->db->where('is_delete', 0);
		return $this->db->get('supplier');
	}

	public function delete_supplier($id, $data)
	{
		$this->db->where('id_supp', $id);
		return $this->db->update('supplier', $data);
	}

	public function save_data($data)
	{
		return $this->db->insert('stok_barang', $data);
	}

	public function save_pembelian($data)
	{
		return $this->db->insert('stok_pembelian', $data);
	}

	public function delete_pembelian($id){
    	return $this->db->delete('stok_pembelian', ['id' => $id]);
	}

	public function get_pembelian()
	{
		return $this->db->get('stok_pembelian');
	}
}
