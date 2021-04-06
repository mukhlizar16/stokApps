<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(! is_login()){
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
		if($this->input->is_ajax_request()){
			$data = [
				'kode_kategori' => $this->input->post('kode_kategori'),
				'nama_kategori' => $this->input->post('nama_kategori'),
				'created_at' => date('Y-m-d H:i:s'),
				'created_by' => $_SESSION['id']
			];

			$simpan = $this->Admin_model->add_category($data);
			if($simpan){
				$arr_data = [
					'status' => 'success',
					'pesan' => 'Data berhasil disimpan, mohon menunggu ...',
					'alamat' => config_item('base_url') . 'admin/kategori'
				];
			}else{
				$arr_data = [
					'status' => 'gagal',
					'pesan' => 'Data gagal disimpan',
					'alamat' => ''
				];
			}
			echo json_encode($arr_data);
		}else{
			echo "No direct script access allowed";
		}
	}

	public function hapus_kategori()
	{
		$id = $this->input->post('id');
		$hapus = $this->Admin_model->delete_category($id);
		if($hapus){
			$arr_data = [
				'status' => 'success',
				'pesan' => 'Data berhasil dihapus, mohon menunggu ...'
			];
		}else{
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
		if ($this->input->is_ajax_request()){
			$kat = $this->input->post('kategori');
			$data = [
				'nama_jenis' => $this->input->post('nama_jenis'),
				'created_at' =>date('Y-m-d H:i:s')
			];

			$simpan = $this->Admin_model->save_jenis($data, $kat);
			if($simpan){
				$arr_data = [
					'status' => 'sukses',
					'pesan' => 'Data jenis berhasil disimpan ...'
				];
			}else{
				$arr_data = [
					'status' => 'gagal',
					'pesan' => 'Data jenis gagal disimpan ...'
				];
			}
			echo json_encode($arr_data);
		}else{
			echo "No direct script access allowed";
		}
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
			'breadcrumb' => 'Pembelian'
		];

		$data['pembelian'] = $this->Admin_model->get_pembelian()->result_array();

		$this->template->load('backend/template/master', 'backend/admin/pembelian', $data);
	}

	public function tambah_pembelian()
	{
		$data = [
			'tgl_beli' => $this->input->post('tgl_beli'),
			'nama_barang' => $this->input->post('nama_barang'),
			'jlh_barang' => $this->input->post('jumlah'),
			'supplier' => $this->input->post('supplier'),
			'created_at' => date('Y-m-d H:i:s'),
			'created_by' => $_SESSION['id']
		];

		$simpan = $this->Admin_model->save_pembelian($data);
		if ($simpan){
			$arr_data = [
				'status' => 'sukses',
				'pesan' => 'Data berhasil disimpan ...'
			];
		}else{
			$arr_data = [
				'status' => 'gagal',
				'pesan' => 'Data gagal disimpan ...'
			];
		}
		echo json_encode($arr_data);
	}

	public function hapus_pembelian()
	{
		if ($this->input->is_ajax_request()){
			$id = $this->input->post('id');
			$hapus = $this->Admin_model->delete_pembelian($id);

			if ($hapus){
				$arr_data = [
					'status' => 'sukses',
					'pesan'  =>	'Data berhasil dihapus ...'
				];
			}else{
				$arr_data = [
					'status' =>	'gagal',
					'pesan'	 =>	'Data gagal dihapus ...'
				];
			}
			echo json_encode($arr_data);
		}else{
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
		if($simpan){
			$arr_data = [
				'status' => 'sukses',
				'pesan' => 'Data berhasil disimpan ...'
			];
		}else{
			$arr_data = [
				'status' => 'gagal',
				'pesan' => 'Data gagal disimpan ...'
			];
		}
		echo json_encode($arr_data);
	}
}
