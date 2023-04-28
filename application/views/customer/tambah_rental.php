<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('partials_customer/header'); ?>

</head>

<body>

    <?php $this->load->view('partials_customer/navbar'); ?><div class="app-main mt-5" id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="d-block d-sm-flex flex-nowrap align-items-center">
                        <div class="card-header alert-success text-white">
                            INVOICE PEMBAYARAN ANDA
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <?php foreach ($detail as $dt) : ?>
                            <form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Harga Sewa (per hari)</label>
                                            <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                                            <input type="text" name="harga" class="form-control"
                                                value="<?php echo $dt->harga ?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Rental</label>
                                            <input type="date" name="tanggal_rental" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Denda (per jam)</label>
                                            <input type="text" name="denda" class="form-control"
                                                value="<?php echo $dt->denda ?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input type="date" name="tanggal_kembali" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success mt-2"><i
                                        class="fas fa-save me-1"></i>Simpan Pesanan</button>
                            </form>



                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end app-main -->
    <?php $this->load->view('partials_customer/footer'); ?>

    <?php $this->load->view('partials_customer/js'); ?>

</body>

</html>