<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('partials_customer/header'); ?>

</head>

<body>

    <?php $this->load->view('partials_customer/navbar'); ?>

    <header class="">
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 my-auto text-white text-xl-left">
                        <h1 class="text-dark font-weight-bolder mb-4">Find your own happiness</h1>
                        <button type="submit" class="btn bg-gradient-dark mt-3 mb-0">Shop now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row bg-white shadow mt-n5 border-radius-lg pb-4 p-3 mx-sm-0 mx-1 position-relative z-index-2">
                <div class="col-lg-4 col-sm-6 mt-2 mb-lg-0 mb-2">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-car fa-2x text-dark" aria-hidden="true"></i>
                        <div class="ms-3">
                            <h6 class="mb-0">
                                Kendaraan Tersedia
                            </h6>
                            <p class="text-sm mb-0">
                                <?php echo $active ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-2 mb-lg-0 mb-2">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-car fa-2x text-dark" aria-hidden="true"></i>
                        <div class="ms-3">
                            <h6 class="mb-0">Kendaraan Tidak Tersedia</h6>
                            <p class="text-sm mb-0">
                                <?php echo $inactive ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-2 mb-lg-0 mb-2">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-shopping-bag fa-2x text-dark" aria-hidden="true"></i>
                        <div class="ms-3">
                            <h6 class="mb-0">Pesanan Selesai</h6>
                            <p class="text-sm mb-0">
                                <?php echo $done ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="pt-6 pb-4">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h3 class="mb-5" spellcheck="false">DAFTAR RENTAL KENDARAAN
                    </h3>
                </div>
                <?php foreach ($mobil as $mb): ?>
                <div class="col-lg-3 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <img src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>"
                                style="width: 230px; height:130px" class="img-fluid border-radius-lg shadow">
                        </div>

                        <div class="card-body pt-3">
                            <div class="d-flex align-items-center">
                                <div>
                                    <span class="text-sm">
                                        <?php echo $mb->merk ?>
                                    </span>
                                    <h4 class="card-description font-weight-bolder text-dark mb-4">
                                        <?php echo $mb->tahun ?>
                                    </h4>
                                </div>

                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="mb-0 font-weight-bolder">
                                    <?php echo number_format($mb->harga) ?>
                                </h5>
                                <h5 class="mb-0 opacity-4 text-sm ms-2">/ Days</h5>
                            </div>
                            <?php
                                   if ($mb->status == "1") {
                                        echo anchor('rental/tambah_rental/' . $mb->id_mobil, '<span class="btn btn-success text-white mb-0">Available</span>');
                                   } else {
                                        echo "<span class='btn btn-dark mb-0 text-white' disabled>Sold</span>";
                                   }
                                   ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php $this->load->view('partials_customer/footer'); ?>

    <?php $this->load->view('partials_customer/js'); ?>

</body>

</html>