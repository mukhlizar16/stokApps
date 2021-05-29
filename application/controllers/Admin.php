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
		$this->form_validation->set_rules('no_faktur', 'Nomor Faktur', 'required', [
			'required' => '%s tidak boleh kosong'
		]);
		$this->form_validation->set_rules('supplier', 'Supplier', 'required', [
			'required' => '%s tidak boleh kosong'
		]);
		$this->form_validation->set_rules('diskon_total', 'Total Diskon', 'required', [
			'required' => '%s tidak boleh kosong'
		]);
		$this->form_validation->set_rules('total_bayar', 'Total Pembayaran', 'required', [
			'required' => '%s tidak boleh kosong'
		]);

		if ($this->form_validation->run() == false){
			$arr_data = [
				'status' => 'fail',
				'pesan' => validation_errors()
			];
		}else{
			$diskon = $this->input->post('diskon_total');
			$bayar = $this->input->post('total_bayar');
			$databeli = [
				'user_id' => $_SESSION['id'],
				'no_faktur' => $this->input->post('no_faktur'),
				'supplier_id' => $this->input->post('supplier'),
				'diskon' => $diskon,
				'total' => $bayar - ($bayar * ($diskon/100)),
				'tgl_beli' => date('Y-m-d H:i:s')
			];

			foreach ($_POST['faktur'] as $row => $val)
			{
				$datadetail[] = array(
					'no_faktur' => $_POST['faktur'][$row],
					'barang_id' => $_POST['barang'][$row],
					'jumlah' => $_POST['jumlah'][$row],
					'harga' => $_POST['harga'][$row]
				);
			}

			$simpanarray = $this->Admin_model->save_pembelian_detail($datadetail);
			$simpan = $this->Admin_model->save_pembelian($databeli);
			if($simpanarray && $simpan){
				$arr_data = [
					'status' => 'sukses-tambah',
					'pesan' => 'Sukses! data berhasil ditambah'
				];
			}else{
				$arr_data = [
					'status' => 'gagal-tambah',
					'pesan' => 'Gagal! data belum berhasil ditambah'
				];
			}

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

	public function bahan_baku()
	{
		$data = [
			'title' => 'Admin / Stok Barang',
			'breadcrumb' => 'Stok Barang'
		];

		$data['satuan'] = $this->Admin_model->get_dataSatuan();
		$data['bahan'] = $this->Admin_model->get_bahanbakuData();

		$this->template->load('backend/template/master', 'backend/admin/bahan-baku', $data, false);
	}

	public function tambah_bahan_baku()
	{
		$data = [
			'nama' => $this->input->post('nm_barang'),
			'satuan_id' => $this->input->post('satuan'),
			'tgl_buat' => date('Y-m-d H:i:s')
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

	public function stok_bahan_baku()
	{
		$data = [
			'title' => 'Admin / Belanja Barang',
			'breadcrumb' => 'Belanja Barang',
			'stok' => $this->Admin_model->get_stok()
		];

		$this->template->load('backend/template/master', 'backend/admin/stok-bahan-baku', $data, false);
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

	public function level()
	{
		$data = [
			'title' => 'Admin - Level User',
			'breadcrumb' => 'Level User'
		];

		$data['level'] = $this->Admin_model->get_level_data();

		$this->template->load('backend/template/master', 'backend/admin/level-user', $data, false);
	}

	public function tambah_level()
	{
		if ($this->input->is_ajax_request()){
			$data = [
				'nama_level' => $this->input->post('level'),
				'created_at' => date('Y-m-d H:i:s')
			];

			$simpan = $this->Admin_model->save_level($data);

			if ($simpan){
				$arr_data = [
					'status' => 'sukses',
					'pesan' => 'Sukses! Data level berhasil disimpan ...'
				];
			}else{
				$arr_data = [
					'status' => 'gagal',
					'pesan' => 'Gagal! Data level tidak berhasil disimpan ...'
				];
			}
			echo json_encode($arr_data);
		}else{
			echo "No direct script access allowed";
		}
	}

	public function hapus_level()
	{
		if ($this->input->is_ajax_request()){
			$id = $this->input->post('id');

			$hapus = $this->Admin_model->delete_level_data($id);

			if ($hapus){
				$arr_data = [
					'status' => 'sukses',
					'pesan' => 'Sukses! Data level berhasil dihapus ...'
				];
			}else{
				$arr_data = [
					'status' => 'gagal',
					'pesan' => 'Gagal! Data level tidak berhasil dihapus ...'
				];
			}
			echo json_encode($arr_data);
		}else{
			echo "No direct script access allowed";
		}
	}
}
