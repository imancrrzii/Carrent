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
                <h1>Tambah Data Tipe</h1>
            </div>

            <div class="row">
                <div class="col-md-12 mb-1">
                    <div class="alert border-0 alert-primary bg-gradient alert-dismissible fade show border-radius-none"
                        role="alert">
                        Silahkan masukan data tipe kendaraan dengan lengkap dan benar.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="ti ti-close"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-6 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header">
                            <h4 class="card-title text-purple">Tambah Tipe Kendaraan</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('admin/data_type/tambah_type_aksi') ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Kode Type</label>
                                        <input type="text" name="kode_type" autocomplete="off" class="form-control"
                                            placeholder="contoh : SDN" required>
                                        <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nama Type</label>
                                        <input type="text" name="nama_type" autocomplete="off" class="form-control"
                                            placeholder="contoh : Sedan" required>
                                        <?php echo form_error('nama_type', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Simpan Data</button>
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