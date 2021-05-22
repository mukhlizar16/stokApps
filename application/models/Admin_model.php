<?php

use phpDocumentor\Reflection\DocBlock\Tags\Return_;

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	public function get_product()
	{
		$this->db->select('p.nama as nama, k.nama as kategori,
    					j.nama as jenis, p.foto as foto, p.deskripsi as deskripsi');
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

	public function save_jenis($data)
	{
		return $this->db->insert('jenis', $data);
	}

	public function get_user()
	{
		return $this->db->get('user');
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
		$this->db->where('id', $id);
		return $this->db->update('supplier', $data);
	}

	public function save_data($data)
	{
		return $this->db->insert('stok_barang', $data);
	}

	public function get_bahan_data()
	{
		return $this->db->get('bahan_baku');
	}

	public function save_pembelian($data)
	{
		return $this->db->insert('pembelian', $data);
	}

	public function cek_stokData($id_barang)
	{
		$this->db->where('barang_id', $id_barang);
		return $this->db->get('stok_bahan_baku');
	}

	public function add_stok($datastok)
	{
		return $this->db->insert('stok_bahan_baku', $datastok);
	}

	public function update_stok($id_barang, $jumlah_akhir)
	{
		$data = [
			'jumlah' => $jumlah_akhir
		];
		$this->db->where('barang_id', $id_barang);
		return $this->db->update('stok_bahan_baku', $data);
	}

	public function delete_pembelian($id)
	{
		return $this->db->delete('pembelian', ['id' => $id]);
	}

	public function get_pembelian()
	{
		$this->db->select('p.no_faktur as no_faktur, s.nama as supplier, p.id as id, p.tgl_beli as tgl,
							p.total as total');
		$this->db->from('pembelian as p');
		$this->db->join('supplier as s', 's.id = p.supplier_id', 'left');
		return $this->db->get();
	}

	public function save_satuan($data)
	{
		return $this->db->insert('satuan', $data);
	}

	public function get_dataSatuan()
	{
		return $this->db->get('satuan');
	}

	public function get_bahanbaku()
	{
		$this->db->select('b.jumlah as jumlah, b.id as id, k.nama as barang');
		$this->db->from('stok_bahan_baku as b');
		$this->db->join('bahan_baku as k', 'k.id = b.barang_id', 'left');
		return $this->db->get();
	}

	public function save_bahanbaku($data)
	{
		return $this->db->insert('bahan_baku', $data);
	}
}
