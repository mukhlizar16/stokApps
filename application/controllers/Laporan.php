<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporan extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Data Penjualan";
        $this->template->load('backend/template/master', 'backend/Laporan/penjualan', $data);
    }

    public function pembelian()
    {
        $data['title'] = "Data Penjualan";
        $this->template->load('backend/template/master', 'backend/Laporan/pembelian', $data);
    }
}
