<?php

class Data_mobil extends CI_Controller
{

    public function index()
    {
        $data['mobil'] = $this->rental_model->get_data('mobil')->result();
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('admin/data_mobil', $data);
    }

    public function tambah_mobil()
    {
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('admin/form_tambah_mobil', $data);
    }

    public function tambah_mobil_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_mobil();
        } else {
            $kode_type = $this->input->post('kode_type');
            $merk = $this->input->post('merk');
            $no_plat = $this->input->post('no_plat');
            $warna = $this->input->post('warna');
            $tahun = $this->input->post('tahun');
            $status = $this->input->post('status');
            $harga = $this->input->post('harga');
            $denda = $this->input->post('denda');
            $gambar = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar Mobil Gagal Di Upload!";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'kode_type' => $kode_type,
                'merk' => $merk,
                'no_plat' => $no_plat,
                'tahun' => $tahun,
                'warna' => $warna,
                'status' => $status,
                'harga' => $harga,
                'denda' => $denda,
                'gambar' => $gambar
            );

            $this->rental_model->insert_data($data, 'mobil');
            $this->session->set_flashdata('berhasil', 'Kendaraan berhasil di tambahkan');
            redirect('admin/data_mobil');
        }
    }

    public function update_mobil($id)
    {
        $where = array('id_mobil' => $id);
        $data['mobil'] = $this->db->query("SELECT * FROM mobil mb, type tp WHERE mb.kode_type = tp.kode_type AND mb.id_mobil = '$id'")->result();
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('admin/form_update_mobil', $data);
    }

    public function update_mobil_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_mobil_aksi();
        } else {
            $id = $this->input->post('id_mobil');
            $kode_type = $this->input->post('kode_type');
            $merk = $this->input->post('merk');
            $no_plat = $this->input->post('no_plat');
            $warna = $this->input->post('warna');
            $tahun = $this->input->post('tahun');
            $status = $this->input->post('status');
            $harga = $this->input->post('harga');
            $denda = $this->input->post('denda');
            $gambar = $_FILES['gambar']['name'];

            if ($gambar) {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|pdf';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'kode_type' => $kode_type,
                'merk' => $merk,
                'no_plat' => $no_plat,
                'tahun' => $tahun,
                'warna' => $warna,
                'status' => $status,
                'harga' => $harga,
                'denda' => $denda
            );

            $where = array(
                'id_mobil' => $id
            );

            $this->rental_model->update_data('mobil', $data, $where);
            $this->session->set_flashdata('berhasil', 'Kendaraan berhasil di ubah');
            redirect('admin/data_mobil');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_type', 'Kode_type', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('no_plat', 'No plat', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
        $this->form_validation->set_rules('status', 'Kode_type', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('denda', 'Denda', 'required');
    }

    public function detail_mobil($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_mobil($id);
        $this->load->view('admin/detail_mobil', $data);
    }

    public function hapus_mobil($id)
    {
        $where = array('id_mobil' => $id);
        $this->rental_model->delete_data($where, 'mobil');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Mobil Berhasil Dihapus.
      </div>');
        redirect('admin/data_mobil');
    }
}