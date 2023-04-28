<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('partials_customer/header'); ?>

</head>

<body>

    <?php $this->load->view('partials_customer/navbar'); ?>

    <div class="app-main mt-5" id="main">
        <div class="container">
            <div class="card mt-5">
                <div class="card-header alert alert-dark text-white">
                    RIWAYAT PESANAN ANDA
                </div>
                <span class="p-1">
                    <?php echo $this->session->flashdata('pesan') ?>
                </span>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Tanggal Rental</th>
                            <th>Jenis Kendaraan</th>
                            <th>No Plat</th>
                            <th>Harga</th>
                            <th>Status Rental</th>
                            <th>Aksi</th>
                        </tr>

                        <?php $no = 1;
                    foreach ($transaksi as $tr): ?>
                        <tr class="text-center">
                            <td>
                                <?php echo $no++ ?>
                            </td>
                            <td>
                                <?php echo date('d M Y', strtotime($tr->tanggal_rental)); ?>
                            </td>
                            <td>
                                <?php echo $tr->merk ?>
                            </td>
                            <td>
                                <?php echo $tr->no_plat ?>
                            </td>
                            <td>Rp.
                                <?php echo number_format($tr->harga, 0, ',', '.') ?>
                            </td>
                            <td>
                                <?php if ($tr->status_rental == "Selesai") { ?>
                                <button class="btn btn-dark">Rental Selesai</button>
                                <?php } else { ?>
                                <a href="<?php echo base_url('customer/transaksi/pembayaran/' . $tr->id_rental) ?>"
                                    class="btn btn-success">Cek Pembayaran</a>
                                <?php } ?>
                            </td>
                            <td>
                                <?php
                                if ($tr->status_rental == 'Belum Selesai') { ?>
                                <a onclick="return confirm('Apakah anda yakin ingin membatalkan transaksi ?')"
                                    class="btn btn-danger"
                                    href="<?php echo base_url('customer/transaksi/batal_transaksi/' . $tr->id_rental) ?>">Batal</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php $this->load->view('partials_customer/footer'); ?>

    <?php $this->load->view('partials_customer/js'); ?>

</body>

</html>