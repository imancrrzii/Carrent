<?php

class Auth extends CI_Controller
{

    public function login()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_login');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $cek = $this->rental_model->cek_login($username, $password);
            if ($cek == FALSE) {
                $this->session->set_flashdata('gagal', 'Periksa kembali akun anda, karena tidak terdaftar');
                redirect('auth/login');
            } elseif ($cek->role_id == 0) {
                $this->session->set_flashdata('cek', 'Akun anda sedang proses di aktifasi');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('id_customer', $cek->id_customer);
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);
                $this->session->set_userdata('nama', $cek->nama);
                $this->session->set_userdata('alamat', $cek->alamat);
                $this->session->set_userdata('no_ktp', $cek->no_ktp);
                $this->session->set_userdata('gender', $cek->gender);
                $this->session->set_userdata('no_telepon', $cek->no_telepon);

                switch ($cek->role_id) {
                    case 1:
                        $this->session->set_flashdata('berhasil', 'Login anda berhasil');
                        redirect('admin/dashboard');
                        break;
                    case 2:
                        $this->session->set_flashdata('berhasil', 'Login anda berhasil');
                        redirect('dashboard');
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }

}