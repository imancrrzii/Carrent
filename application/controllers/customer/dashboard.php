<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['mobil'] = $this->rental_model->get_data('mobil')->result();
        $data1['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('customer/dashboard', $data1);
        $this->load->view('customer/dashboard', $data);
    }

    public function detail_mobil($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_mobil($id);
        $this->load->view('customer/detail_mobil', $data);
    }
    public function type($id){
        $type = 
    }
}