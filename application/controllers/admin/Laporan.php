<?php

class Laporan extends CI_Controller
{

    public function index()
    {
        $dari       = $this->input->post('dari');
        $sampai     = $this->input->post('sampai');
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/filter_laporan');
        } else {
            $data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil = mb.id_mobil AND tr.id_customer = cs.id_customer AND date(tanggal_rental) >= '$dari' AND  date(tanggal_rental) <= '$sampai'")->result();
            $this->load->view('admin/tampilkan_laporan', $data);
        }
    }

    public function export()
    {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');
        $trx = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil = mb.id_mobil AND tr.id_customer = cs.id_customer AND date(tanggal_rental) >= '$dari' AND  date(tanggal_rental) <= '$sampai'")->result();
        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Transaction ID')
            ->setCellValue('C1', 'Customer ID')
            ->setCellValue('D1', 'Mobil Tipe ID')
            ->setCellValue('E1', 'Nama Pelanggan')
            ->setCellValue('F1', 'Alamat')
            ->setCellValue('G1', 'No Hp')
            ->setCellValue('H1', 'No KTP')
            ->setCellValue('I1', 'Merk Mobil')
            ->setCellValue('J1', 'Tgl Rental')
            ->setCellValue('K1', 'Tgl Kembali')
            ->setCellValue('L1', 'Harga')
            ->setCellValue('M1', 'Denda')
            ->setCellValue('N1', 'Total Bayar')
            ->setCellValue('O1', 'Tgl Selesai')
            ->setCellValue('P1', 'Bukti Pembayaran')
            ->setCellValue('Q1', 'Status Rental');

        $kolom = 2;
        $nomor = 1;
        foreach ($trx as $pengguna) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $kolom, $nomor)
                ->setCellValue('B' . $kolom, 'TRSC-' . $pengguna->id_rental)
                ->setCellValue('C' . $kolom, 'CST-' . $pengguna->id_customer)
                ->setCellValue('D' . $kolom, $pengguna->kode_type)
                ->setCellValue('E' . $kolom, $pengguna->nama)
                ->setCellValue('F' . $kolom, $pengguna->alamat)
                ->setCellValue('G' . $kolom, $pengguna->no_telepon)
                ->setCellValue('H' . $kolom, $pengguna->no_ktp)
                ->setCellValue('I' . $kolom, $pengguna->merk)
                ->setCellValue('J' . $kolom, date('j F Y', strtotime($pengguna->tanggal_rental)))
                ->setCellValue('K' . $kolom, date('j F Y', strtotime($pengguna->tanggal_kembali)))
                ->setCellValue('L' . $kolom, number_format($pengguna->harga))
                ->setCellValue('M' . $kolom, number_format($pengguna->total_denda))
                ->setCellValue('N' . $kolom, number_format($pengguna->harga + $pengguna->total_denda))
                ->setCellValue('O' . $kolom, date('j F Y', strtotime($pengguna->tanggal_pengembalian)))
                ->setCellValue('P' . $kolom, $pengguna->bukti_pembayaran)
                ->setCellValue('Q' . $kolom, $pengguna->status_rental);
            $kolom++;
            $nomor++;
        }

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Transaksi Pesanan ' . date("j F Y") . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}