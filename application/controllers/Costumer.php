<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Costumer extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Member";
        $this->template->load('backend/template/master', 'backend/Costumer/costumer', $data);
    }
    public function tambah()
    {
        $data['title'] = "Costumer";
        $this->template->load('backend/template/master', 'backend/Costumer/tambah', $data);
    }
}
