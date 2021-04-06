<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produk extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Produk";
        $this->template->load('backend/template/master', 'backend/Produk/produk', $data);
    }

    public function tambah()
    {
        $data['title'] = "Tambah Produk";
        $this->template->load('backend/template/master', 'backend/Produk/input_produk', $data);
    }

    public function kategori()
    {
        $data['title'] = "Kategori Produk";
        $data['breadcrumb'] = "Kategori Produk";
        $this->template->load('backend/template/master', 'backend/Produk/kategori', $data);
    }
}
