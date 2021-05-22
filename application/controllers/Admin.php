<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) {
			redirect('welcome', 'refresh');
		}
	}

	public function index()
	{
		$data = [
			'title' => 'Admin / Dashboard',
			'breadcrumb' => ''
		];

		$this->template->load('backend/template/master', 'backend/admin/dashboard', $data, false);
	}

	public function produk()
	{
		$data = [
			'title' => 'Admin / Produk',
			'breadcrumb' => 'Produk',
		];

		$data['produk'] = $this->Admin_model->get_product();

		$this->template->load('backend/template/master', 'backend/admin/produk', $data, false);
	}

	public function kategori()
	{
		$data = [
			'title' => 'Admin / Produk',
			'breadcrumb' => 'kategori',
		];

		$data['kategori'] = $this->Admin_model->get_kategori();

		$this->template->load('backend/template/master', 'backend/admin/kategori', $data, false);
	}

	public function tambah_kategori()
	{
		if ($this->input->is_ajax_request()) {
			$data = [
				'kode' => $this->input->post('kode_kategori'),
				'nama' => $this->input->post('nama_kategori'),
				'tgl_buat' => date('Y-m-d H:i:s'),
			];

			$simpan = $this->Admin_model->add_category($data);
			if ($simpan) {
				$arr_data = [
					'status' => 'success',
					'pesan' => 'Data berhasil disimpan, mohon menunggu ...',
					'alamat' => config_item('base_url') . 'admin/kategori'
				];
			} else {
				$arr_data = [
					'status' => 'gagal',
					'pesan' => 'Data gagal disimpan',
					'alamat' => ''
				];
			}
			echo json_encode($arr_data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function hapus_kategori()
	{
		$id = $this->input->post('id');
		$hapus = $this->Admin_model->delete_category($id);
		if ($hapus) {
			$arr_data = [
				'status' => 'success',
				'pesan' => 'Data berhasil dihapus, mohon menunggu ...'
			];
		} else {
			$arr_data = [
				'status' => 'gagal',
				'pesan' => 'Data gagal disimpan'
			];
		}
		echo json_encode($arr_data);
	}

	public function jenis()
	{
		$data = [
			'title' => 'Admin / Jenis',
			'breadcrumb' => 'Jenis',
		];

		$data['kategori'] = $this->Admin_model->get_kategoriData();
		$data['jenis'] = $this->Admin_model->get_jenisData();

		$this->template->load('backend/template/master', 'backend/admin/jenis', $data, false);
	}

	public function tambah_jenis()
	{
		if ($this->input->is_ajax_request()) {
			$data = [
				'kategori_id' => $this->input->post('kategori'),
				'nama' => $this->input->post('nama_jenis'),
				'tgl_buat' => date('Y-m-d H:i:s')
			];

			$simpan = $this->Admin_model->save_jenis($data);
			if ($simpan) {
				$arr_data = [
					'status' => 'sukses',
					'pesan' => 'Data jenis berhasil disimpan ...'
				];
			} else {
				$arr_data = [
					'status' => 'gagal',
					'pesan' => 'Data jenis gagal disimpan ...'
				];
			}
			echo json_encode($arr_data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function supplier()
	{
		$data = [
			'title' => 'Admin / Supplier',
			'breadcrumb' => 'Supplier',
			'supplier' => $this->Admin_model->get_supplierData()
		];

		$this->template->load('backend/template/master', 'backend/admin/supplier', $data, false);
	}

	public function tambah_supplier()
	{
		if ($this->input->is_ajax_request()) {
			$data = [
				'nama' => $this->input->post('nama_toko'),
				'alamat' => $this->input->post('alamat'),
				'telp' => $this->input->post('no_hp'),
				'email' => $this->input->post('email'),
				'tgl_buat' => date('Y-m-d H:i:s'),
				'created_by' => $_SESSION['id']
			];

			$simpan = $this->Admin_model->add_supplier($data);
			if ($simpan) {
				$arr_data = [
					'status' => 'sukses',
					'pesan' => 'Data supplier berhasil disimpan ...'
				];
			} else {
				$arr_data = [
					'status' => 'gagal',
					'pesan' => 'Data supplier gagal disimpan ...'
				];
			}
			echo json_encode($arr_data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function hapus_supplier()
	{
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post('id');
			$data = [
				'deleted_by' => $_SESSION['id'],
				'deleted_at' => date('Y-m-d H:i:s'),
				'is_delete' => 1
			];
			$hapus = $this->Admin_model->delete_supplier($id, $data);
			if ($hapus) {
				$arr_data = [
					'status' => 'sukses',
					'pesan' => 'Data supplier berhasil dihapus ...'
				];
			} else {
				$arr_data = [
					'status' => 'gagal',
					'pesan' => 'Data supplier gagal dihapus ...'
				];
			}
			echo json_encode($arr_data);
		} else {
			echo "No direct script access allowed";
		}
	}


	public function produksi()
	{
		$data = [
			'title' => 'Admin / Produksi',
			'breadcrumb' => 'Produksi'
		];

		$this->template->load('backend/template/master', 'backend/admin/produksi', $data);
	}

	public function penjualan()
	{
		$data = [
			'title' => 'Admin / Penjualan',
			'breadcrumb' => 'Penjualan'
		];

		$this->template->load('backend/template/master', 'backend/admin/penjualan', $data);
	}

	public function pembelian()
	{
		$data = [
			'title' => 'Admin / Pembelian',
			'breadcrumb' => 'Pembelian',
			'bahan' => $this->Admin_model->get_bahan_data(),
			'pembelian' => $this->Admin_model->get_pembelian()->result_array(),
			'user' => $this->Admin_model->get_user()->result_array(),
			'supplier' => $this->Admin_model->get_supplierData()->result_array()
		];

		$this->template->load('backend/template/master', 'backend/admin/pembelian', $data);
	}

	public function get_barang(){
		$bahan = $this->Admin_model->get_bahan_data()->result_array();
		foreach ($bahan as $b => $row){
			$arr_data[] = array(
				'id' => $row['id'],
				'nama' => $row['nama']
			);
		}
		echo json_encode($arr_data);
	}

	public function tambah_pembelian()
	{
		$diskon = $this->input->post('diskon');
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');

		$data = [
			'tgl_beli' => $this->input->post('tgl_beli'),
			'barang_id' => $this->input->post('nm_barang'),
			'no_faktur' => $this->input->post('faktur'),
			'jumlah_beli' => $jumlah,
			'supplier_id' => $this->input->post('supplier'),
			'harga_beli' => $harga,
			'total' => ($jumlah * $harga) - (($diskon / 100) * $jumlah * $harga),
			'diskon' => $diskon,
			'user_id' => $_SESSION['id']
		];

		$simpan = $this->Admin_model->save_pembelian($data);
		if ($simpan) {
			$id_barang = $this->input->post('nm_barang');
			$cek_stok = $this->Admin_model->cek_stokData($id_barang)->row_array();

			if ($cek_stok == null){
				$datastok = [
					'barang_id' => $id_barang,
					'jumlah' => $jumlah,
					'tanggal' => date('Y-m-d H:i:s')
				];
				$simpanstok = $this->Admin_model->add_stok($datastok);
				if ($simpanstok){
					$arr_data = [
						'status' => 'sukses-tambah',
						'pesan' => 'Data pembelian dan stok berhasil ditambah ...'
					];
				}else{
					$arr_data = [
						'status' => 'gagal-tambah',
						'pesan' => 'Data pembelian dan stok gagal ditambah ...'
					];
				}
			}else{
				$jumlah_awal = $cek_stok['jumlah'];
				$jumlah_akhir = $jumlah + $jumlah_awal;
				$update = $this->Admin_model->update_stok($id_barang, $jumlah_akhir);
				if ($update){
					$arr_data = [
						'status' => 'sukses-update',
						'pesan' => 'Data berhasil disimpan dan update stok ...'
					];
				}else{
					$arr_data = [
						'status' => 'gagal-update',
						'pesan' => 'Data berhasil disimpan tetapi gagal update stok ...'
					];
				}
			}
		} else {
			$arr_data = [
				'status' => 'gagal',
				'pesan' => 'Data gagal disimpan dan gagal update...'
			];
		}
		echo json_encode($arr_data);
	}

	public function hapus_pembelian()
	{
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post('id');
			$hapus = $this->Admin_model->delete_pembelian($id);

			if ($hapus) {
				$arr_data = [
					'status' => 'sukses',
					'pesan' => 'Data berhasil dihapus ...'
				];
			} else {
				$arr_data = [
					'status' => 'gagal',
					'pesan' => 'Data gagal dihapus ...'
				];
			}
			echo json_encode($arr_data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function stok_barang()
	{
		$data = [
			'title' => 'Admin / Stok Barang',
			'breadcrumb' => 'Stok Barang'
		];

		$data['kategori'] = $this->Admin_model->get_kategoriData();
		$data['jenis'] = $this->Admin_model->get_jenisData();
		$data['supplier'] = $this->Admin_model->get_supplierData();

		$this->template->load('backend/template/master', 'backend/admin/stok-barang', $data, false);
	}

	public function tambah_stok()
	{
		$data = [
			'kategori_id' => $this->input->post('kategori'),
			'jenis_id' => $this->input->post('jenis'),
			'nama_barang' => $this->input->post('nama_barang'),
			'supplier_id' => $this->input->post('supplier'),
			'jumlah' => $this->input->post('jumlah'),
			'created_at' => date('Y-m-d H:i:s')
		];

		$simpan = $this->Admin_model->save_data($data);
		if ($simpan) {
			$arr_data = [
				'status' => 'sukses',
				'pesan' => 'Data berhasil disimpan ...'
			];
		} else {
			$arr_data = [
				'status' => 'gagal',
				'pesan' => 'Data gagal disimpan ...'
			];
		}
		echo json_encode($arr_data);
	}

	public function bahan_baku()
	{
		$data = [
			'title' => 'Admin / Belanja Barang',
			'breadcrumb' => 'Belanja Barang',
			'bahan' => $this->Admin_model->get_bahanbaku()
		];

		$this->template->load('backend/template/master', 'backend/admin/bahan-baku', $data, false);
	}

	public function tambah_bahanbaku()
	{
		if ($this->input->is_ajax_request()) {
			$data = [
				'nama' => $this->input->post('nm_barang'),
				'satuan_id' => $this->input->post('satuan'),
				'tgl_buat' => date('Y-m-d H:i:s')
			];

			$simpan = $this->Admin_model->save_bahanbaku($data);
			if ($simpan) {
				$arr_data = [
					'status' => 'sukses',
					'pesan' => 'Data bahan baku berhasil ditambahkan ...'
				];
			} else {
				$arr_data = [
					'status' => 'gagal',
					'pesan' => 'Data bahan baku gagal ditambahkan ...'
				];
			}
			echo json_encode($arr_data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function satuan()
	{
		$data = [
			'title' => 'Admin / Satuan',
			'breadcrumb' => 'Satuan'
		];

		$data['satuan'] = $this->Admin_model->get_dataSatuan();

		$this->template->load('backend/template/master', 'backend/admin/satuan', $data, false);
	}

	public function tambah_satuan()
	{
		if ($this->input->is_ajax_request()) {
			$data = [
				'nama' => $this->input->post('satuan'),
				'tgl_buat' => date('Y-m-d H:i:s')
			];

			$simpan = $this->Admin_model->save_satuan($data);
			if ($simpan) {
				$arr_data =
					[
						'status' => 'sukses',
						'pesan' => 'Data satuan barang berhasil ditambahkan ...'
					];
			} else {
				$arr_data =
					[
						'status' => 'gagal',
						'pesan' => 'Data satuan barang gagal ditambahkan ...'
					];
			}
			echo json_encode($arr_data);
		} else {
			echo "No direct script access allowed";
		}
	}
}
