<?php

class Data_customer extends CI_Controller
{
    public function index()
    {
        $data['customer'] = $this->db->query("SELECT * FROM customer WHERE role_id = '2'")->result();
        $this->load->view('admin/data_customer', $data);
    }

    public function tambah_customer()
    {
        $this->load->view('admin/form_tambah_customer');
    }

    public function tambah_customer_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_customer_aksi();
        } else {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $gender = $this->input->post('gender');
            $no_telepon = $this->input->post('no_telepon');
            $no_ktp = $this->input->post('no_ktp');
            $role_id = $this->input->post('role_id');
            $password = md5($this->input->post('password'));

            $data = array(
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'gender' => $gender,
                'no_telepon' => $no_telepon,
                'no_ktp' => $no_ktp,
                'role_id' => $role_id,
                'password' => $password,
            );

            $this->rental_model->insert_data($data, 'customer');
            $this->session->set_flashdata('berhasil', 'Berhasil tambah data pelanggan');
            redirect('admin/data_customer');
        }
    }

    public function update_customer($id)
    {
        $where = array('id_customer' => $id);
        $data['customer'] = $this->db->query("SELECT * FROM customer WHERE id_customer='$id'")->result();
        $this->load->view('admin/form_update_customer', $data);
    }

    public function update_customer_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_customer_aksi();
        } else {
            $id = $this->input->post('id_customer');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $gender = $this->input->post('gender');
            $no_telepon = $this->input->post('no_telepon');
            $no_ktp = $this->input->post('no_ktp');
            $password = md5($this->input->post('password'));

            $data = array(
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'gender' => $gender,
                'no_telepon' => $no_telepon,
                'no_ktp' => $no_ktp,
                'password' => $password,
            );

            $where = array(
                'id_customer' => $id
            );

            $this->rental_model->update_data('customer', $data, $where);
            $this->session->set_flashdata('berhasil', 'Pelanggan berhasil di ubah');
            redirect('admin/data_customer');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('no_telepon', 'No. Telepon', 'required');
        $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function delete_customer($id)
    {
        $where = array('id_customer' => $id);
        $this->rental_model->delete_data($where, 'customer');
        $this->session->set_flashdata('berhasil', 'Pelanggan berhasil di hapus');
        redirect('admin/data_customer');
    }
}