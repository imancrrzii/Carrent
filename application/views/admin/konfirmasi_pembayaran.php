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
                <h1>Konfirmasi Bukti Pembayaran</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran') ?>">
                                <?php foreach ($pembayaran as $pmb): ?>
                                <a class="btn btn-sm btn-success"
                                    href="<?php echo base_url('admin/transaksi/download_pembayaran/' . $pmb->id_rental) ?>">Download
                                    Bukti Pembayaran</a><br><br>
                                <div class="custom-control custom-switch ml-1">
                                    <input type="hidden" class="custom-control-input"
                                        value="<?php echo $pmb->id_rental ?>" name="id_rental">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1"
                                        name="status_pembayaran">
                                    <label class="custom-control-label" for="customSwitch1">Konfirmasi
                                        Pembayaran</label>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary">Simpan Pembayaran</button>

                                <?php endforeach; ?>
                            </form>
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