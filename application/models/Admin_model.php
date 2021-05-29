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
		$this->db->insert('bahan_baku', $data);
		$datastok = [
			'barang_id' => $this->db->insert_id(),
			'jumlah' => 0,
			'tanggal' => date('Y-m-d H:i:s')
		];
		return $this->db->insert('stok_bahan_baku', $datastok);

	}

	public function get_bahan_data()
	{
		$this->db->order_by('nama', 'ASC');
		return $this->db->get('bahan_baku');
	}

	public function save_pembelian($data)
	{
		return $this->db->insert('pembelian', $data);

	}

	public function save_pembelian_detail($datadetail)
	{
		return $this->db->insert_batch('pembelian_detail', $datadetail);
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

	public function get_bahanbakuData()
	{
		$this->db->select('b.nama as nama, b.id as id, s.nama as satuan, b.tgl_buat as tgl');
		$this->db->from('bahan_baku as b');
		$this->db->join('satuan as s', 's.id = b.satuan_id', 'left');
		$this->db->order_by('nama', 'ASC');
		return $this->db->get();
	}

	public function get_stok()
	{
		$this->db->select('s.id, s.jumlah as jumlah, b.nama as barang, s.tanggal as tgl, t.nama as satuan');
		$this->db->from('stok_bahan_baku as s');
		$this->db->join('bahan_baku as b', 'b.id = s.barang_id', 'left');
		$this->db->join('satuan as t', 't.id = b.satuan_id', 'left');
		return $this->db->get();
	}

	public function get_level_data()
	{
		return $this->db->get('level');
	}

	public function save_level($data)
	{
		return $this->db->insert('level', $data);
	}

	public function delete_level_data($id)
	{
		$this->db->delete('level', ['id' => $id]);
		return $this->db->query('
				ALTER TABLE level AUTO_INCREMENT = 1
				');
	}
}
