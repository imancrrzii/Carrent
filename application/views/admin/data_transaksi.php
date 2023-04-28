<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('partials_admin/header'); ?>

</head>

<body>
    <?php $this->load->view('partials_admin/navbar'); ?>

    <?php $this->load->view('partials_admin/sidebar'); ?>

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Transaksi</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="datatable-wrapper table-responsive">
                                <table id="datatable" class="display compact table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Customer</th>
                                            <th>Mobil</th>
                                            <th>Tgl. Rental</th>
                                            <th>Tgl. Kembali</th>
                                            <th>Harga/Day</th>
                                            <th>Denda/Day</th>
                                            <th>Total Denda</th>
                                            <th>Tgl. Dikembalikan</th>
                                            <th>Status Pengembalian</th>
                                            <th>Status Rental</th>
                                            <th>Cek Pembayaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($transaksi as $tr): ?>
                                        <tr>
                                            <td>
                                                <?php echo $no++ ?>
                                            </td>
                                            <td>
                                                <?php echo $tr->nama ?>
                                            </td>
                                            <td>
                                                <?php echo $tr->merk ?>
                                            </td>
                                            <td>
                                                <?php echo date('d M Y', strtotime($tr->tanggal_rental)); ?>
                                            </td>
                                            <td>
                                                <?php echo date('d M Y', strtotime($tr->tanggal_kembali)); ?>
                                            </td>
                                            <td>Rp.
                                                <?php echo number_format($tr->harga, 0, ',', '.') ?>
                                            </td>
                                            <td>Rp.
                                                <?php echo number_format($tr->denda, 0, ',', '.') ?>
                                            </td>
                                            <td>Rp.
                                                <?php echo number_format($tr->total_denda, 0, ',', '.') ?>
                                            </td>
                                            <td>
                                                <?php if ($tr->tanggal_pengembalian == "0000-00-00") {
                                                        echo "-";
                                                    } else {
                                                        echo date('d M Y', strtotime($tr->tanggal_pengembalian));
                                                    } ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if ($tr->status_pengembalian == "Belum Kembali") {
                                                        echo "Belum kembali";
                                                    } else {
                                                        echo "Sudah kembali";
                                                    }
                                                    ?>
                                            </td>

                                            <td>
                                                <?php
                                                    if ($tr->status_rental == "Belum Selesai") {
                                                        echo "Belum Selesai";
                                                    } else {
                                                        echo "Sudah Selesai";
                                                    }
                                                    ?>
                                            </td>

                                            <td>
                                                <center>
                                                    <?php
                                                        if (empty($tr->bukti_pembayaran)) { ?>
                                                    <button class="btn btn-sm btn-secondary"><i class="fe fe-clock"></i>
                                                        Waiting Payment</button>
                                                    <?php } else { ?>
                                                    <a class="btn btn-sm btn-success"
                                                        href="<?php echo base_url('admin/transaksi/pembayaran/' . $tr->id_rental) ?>"><i
                                                            class="fe fe-check-circle"></i> Paid</a>
                                                    <?php } ?>
                                                </center>
                                            </td>

                                            <td>
                                                <?php
                                                    if ($tr->status_pembayaran == "1") {
                                                        echo "-";
                                                    } else { ?>
                                                <div class="d-flex">
                                                    <a class="btn btn-warning mr-1"
                                                        href="<?php echo base_url('admin/transaksi/transaksi_selesai/' . $tr->id_rental) ?>">
                                                        <i class='fa fa-edit'></i></a>
                                                    <a class="btn btn-danger ml-3"
                                                        href="<?php echo base_url('admin/transaksi/batal_transaksi/' . $tr->id_rental) ?>">
                                                        <i class='fa fa-times'></i></a>
                                                </div>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php $this->load->view('partials_admin/footer'); ?>

    <?php $this->load->view('partials_admin/js'); ?>

</body>

</html>