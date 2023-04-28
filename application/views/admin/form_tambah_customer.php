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
                <h1>Tambah Data Customer</h1>
            </div>

            <div class="row">
                <div class="col-md-12 mb-1">
                    <div class="alert border-0 alert-primary bg-gradient alert-dismissible fade show border-radius-none"
                        role="alert">
                        Silahkan masukan data pelanggan dengan lengkap dan benar.
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
                            <h4 class="card-title text-purple">Tambah Pelanggan</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST"
                                action="<?php echo base_url('admin/data_customer/tambah_customer_aksi') ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama Customer</label>
                                        <input type="text" name="nama" autocomplete="off" placeholder="eg : Arya Wiguna"
                                            class="form-control">
                                        <?php echo form_error('nama', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" autocomplete="off"
                                            placeholder="eg : JL. Depok Raya" class="form-control">
                                        <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="gender">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?php echo form_error('gender', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>No Tlp</label>
                                        <input type="number" name="no_telepon" autocomplete="off"
                                            placeholder="eg : 081266780001" class="form-control">
                                        <?php echo form_error('no_telepon', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>No KTP</label>
                                        <input type="number" name="no_ktp" autocomplete="off"
                                            placeholder="eg : 227519980009" class="form-control">
                                        <?php echo form_error('no_ktp', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Username</label>
                                        <input type="text" name="username" autocomplete="off"
                                            placeholder="eg : Arya Wiguna@gmail.com" class="form-control">
                                        <?php echo form_error('username', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Password</label>
                                        <input type="password" name="password" autocomplete="off"
                                            placeholder="eg : 12345678" class="form-control">
                                        <?php echo form_error('password', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Hak Akses</label>
                                        <select class="form-control" name="role_id">
                                            <option value="">Pilih Hak Akses</option>
                                            <option value="1">Admin Shop</option>
                                            <option value="2">Pelanggan</option>
                                        </select>
                                        <?php echo form_error('role_id', '<div class="text-small text-danger">', '</div') ?>
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