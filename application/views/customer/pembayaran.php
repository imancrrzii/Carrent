<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('partials_customer/header'); ?>

</head>

<body>

    <?php $this->load->view('partials_customer/navbar'); ?>

    <div class="app-main" id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <div class="card">
                        <div class="card-header alert alert-dark text-white">
                            INFORMASI PEMBELIAN ANDA
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <?php foreach ($transaksi as $tr): ?>
                                <tr>
                                    <th>Merk Mobil</th>
                                    <td>
                                        <?php echo $tr->merk ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tanggal Rental</th>
                                    <td>
                                        <?php echo $tr->tanggal_rental ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kembali</th>
                                    <td>
                                        <?php echo $tr->tanggal_kembali ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Harga Sewa/Hari</th>
                                    <td>Rp.
                                        <?php echo number_format($tr->harga) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <?php
                                    $x = strtotime($tr->tanggal_kembali);
                                    $y = strtotime($tr->tanggal_rental);
                                    $jmlhari = abs(($x - $y) / (60 * 60 * 24));
                                    ?>
                                    <th>Jumlah Hari Sewa</th>
                                    <td>
                                        <?php echo $jmlhari ?> Hari
                                    </td>
                                </tr>

                                <tr class="text-primary">
                                    <th>Jumlah Pembayaran</th>
                                    <td><button class="btn btn-danger">Rp.
                                            <?php echo number_format($tr->harga * $jmlhari) ?>
                                        </button></td>
                                </tr>

                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="card">
                        <div class="card-header alert alert-dark text-white">
                            INFORMASI PEMBAYARAN
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><img src="<?php echo base_url('assets/mandiri.png') ?>"
                                        width="20%" alt="" class="src"> Bank Mandiri / 170021698 (<font color="red">a/n.
                                        imancar</font>)</li>
                                <li class="list-group-item"><img src="<?php echo base_url('assets/bca.png') ?>"
                                        width="15%" alt="" class="src"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bank BCA /
                                    270021695 (<font color="red">a/n. imancar</font>)</li>
                                <li class="list-group-item"><img src="<?php echo base_url('assets/bni.png') ?>"
                                        width="13%" alt="" class="src"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bank
                                    BNI / 370469687
                                    (<font color="red">a/n. imancar</font>)</li>
                            </ul>

                            <?php
                        if (empty($tr->bukti_pembayaran)) { ?>
                            <a class="btn btn-primary mt-2" style="width: 100%"
                                href="<?php echo base_url('customer/transaksi/uploadbukti/' . $tr->id_rental) ?>">Unggah
                                Bukti Pembayaran</a>
                            <?php } elseif ($tr->status_pembayaran == '0') { ?>
                            <button style="width: 100%" class="btn btn-warning">Menunggu Konfirmasi</button>
                            <?php } elseif ($tr->status_pembayaran == '1') { ?>
                            <button style="width: 100%" class="btn btn-success">Pembayaran Selesai</button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('partials_customer/footer'); ?>

        <?php $this->load->view('partials_customer/js'); ?>

</body>

</html>