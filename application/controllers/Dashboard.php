<?php

class Dashboard extends CI_Controller
{

     public function index()
     {
          $customer = $this->session->userdata('id_customer');
          $data['mobil'] = $this->rental_model->get_data('mobil')->result();
          $active = $this->db->query("SELECT * FROM mobil WHERE status ='1'");
          $inactive = $this->db->query("SELECT * FROM mobil WHERE status ='0'");
          $pesanan = $this->db->query("SELECT * FROM transaksi WHERE status_rental ='Selesai' and id_customer = '$customer'");
          $data['active'] = $active->num_rows();
          $data['inactive'] = $inactive->num_rows();
          $data['done'] = $pesanan->num_rows();
          $this->load->view('dashboard', $data);
     }

     public function detail_mobil($id)
     {
          $data['detail'] = $this->rental_model->ambil_id_mobil($id);
          $this->load->view('detail_mobil', $data);
     }
}