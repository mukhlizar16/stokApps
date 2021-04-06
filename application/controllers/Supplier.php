<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Supplier extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Supplier";
        $data['supplier'] = $this->Supplier_model->tampilData();
        $this->template->load('backend/template/master', 'backend/Supplier/supplier', $data);
    }
    public function tambah()
    {
        $data['title'] = "Tambah Supplier";
        $this->template->load('backend/template/master', 'backend/Supplier/tambah_supp', $data);
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean|required|min_length[3]', [
            'required' => '%s wajib diisi',
            'min_length' => '%s minimal 3 huruf',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|xss_clean|required|min_length[3]', [
            'required' => '%s wajib diisi',
            'min_length' => '%s minimal 3 huruf',
        ]);
        $this->form_validation->set_rules('nohp', 'No Handphone', 'trim|xss_clean|required|min_length[5]', [
            'required' => '%s wajib diisi',
            'min_length' => '%s minimal 5 karakter',
        ]);
    }

    public function simpan()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Supplier";
            $this->template->load('backend/template/master', 'backend/Supplier/tambah_supp', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'nohp' => $this->input->post('nohp'),
                'email' => $this->input->post('email'),
                'web' => $this->input->post('web'),
                'created_at' => date('Y-m-d H:i:s'),
                'deleted_by' => 0,
                'is_delete' => 0,
            ];
            $simpan = $this->Supplier_model->saveData($data);
            if ($simpan) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg></button> <strong>Success!</strong> Data berhasil ditambah </div>');
                redirect('supplier');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                <line x1="18" y1="6" x2="6" y2="18">
                </line><line x1="6" y1="6" x2="18" y2="18"></line>
                </svg></button> <strong>Error!</strong> Data gagal ditambah. </div>');
                redirect('supplier/tambah_supp');
            }
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $hasil = $this->Supplier_model->id_supp($id);
        if ($hasil->num_rows() > 0) {
            $h = $hasil->row_array();
            $data = array(
                'id' => $h['id_supp'],
                'nama_supp' => $h['nama'],
                'alamat' => $h['alamat'],
                'nohp' => $h['nohp'],
                'email' => $h['email'],
                'web' => $h['web'],
                'title' => "Edit Data Supplier"
            );
            $this->template->load('backend/template/master', 'backend/Supplier/edit_supp', $data);
        } else {
            echo "Tidak ada data yang ditemukan";
            redirect('supplier');
        }
    }

    public function updateData()
    {
        $id = $this->input->post('id');
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'nohp' => $this->input->post('nohp'),
            'email' => $this->input->post('email'),
            'web' => $this->input->post('web'),
            'updated_on' => date('Y-m-d H:i:s'),
            //'update_by' => $this->session->userdata('ids')
        );
        $update = $this->Supplier_model->update($id, $data);
        if ($update) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg></button> <strong>Success!</strong> Data berhasil di update </div>');
            redirect('supplier');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
            <line x1="18" y1="6" x2="6" y2="18">
            </line><line x1="6" y1="6" x2="18" y2="18"></line>
            </svg></button> <strong>Error!</strong> Data gagal di update. </div>');
            redirect('supplier/edit_supp');
        }
    }
}
