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
                <h1>Data Laporan</h1>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="datatable-wrapper table-responsive">
                                <h4 class="card-title text-purple">Filter Laporan</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Dari Tanggal</label>
                                            <input type="date" name="dari" class="form-control">
                                            <?php echo form_error('dari', '<div class="text-small text-danger">', '</div') ?>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Sampai Tanggal</label>
                                            <input type="date" name="sampai" class="form-control">
                                            <?php echo form_error('sampai', '<div class="text-small text-danger">', '</div') ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary mt-2"><i
                                            class="fa fa-search"></i>
                                        Filter Data</button>
                                </form>
                                <div class="border-top my-4"></div>
                                <h4 class="card-title text-purple">Hasil Pencarian Laporan</h4>
                                <table class="table-responsive table table-bordered table-striped mt-3">
                                    <tr>
                                        <th>No</th>
                                        <th>Pelanggan</th>
                                        <th>Mobil</th>
                                        <th>Tgl Rental</th>
                                        <th>Tgl Kembali</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                        <th>Tgl Selesai</th>
                                        <th>Status</th>
                                    </tr>

                                    <?php $no = 1;
                                    foreach ($laporan as $tr): ?>
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
                                        <td>Rp
                                            <?php echo number_format($tr->harga) ?><br>
                                            <?php
                                                if ($tr->status_pembayaran == "0") {
                                                    echo "<b><font color='red'>not paid</font></b>";
                                                } else {
                                                    echo "<b><font color='green'>paid</font></b>";
                                                }
                                                ?><br>
                                            <small>
                                                <font color="maroon">Tax : Rp
                                                    <?php echo number_format($tr->total_denda) ?>
                                                </font>
                                            </small>
                                        </td>
                                        <td>
                                            Rp
                                            <?php echo number_format($tr->harga + $tr->total_denda) ?>
                                        </td>
                                        <td>
                                            <?php
                                                if ($tr->tanggal_pengembalian == "0000-00-00") {
                                                    echo "-";
                                                } else {
                                                    echo date('d M Y', strtotime($tr->tanggal_pengembalian));
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
                                    </tr>
                                    <?php endforeach; ?>
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