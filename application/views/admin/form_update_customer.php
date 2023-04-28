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
                <h1>Update Data Customer</h1>
            </div>

            <div class="row">
                <div class="col-md-12 mb-1">
                    <div class="alert border-0 alert-primary bg-gradient alert-dismissible fade show border-radius-none"
                        role="alert">
                        Silahkan ubah pelanggan dengan lengkap dan benar.
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
                            <h4 class="card-title text-purple">Ubah Pelanggan</h4>
                        </div>
                        <div class="card-body">
                            <?php foreach ($customer as $cs): ?>
                            <form method="POST"
                                action="<?php echo base_url('admin/data_customer/update_customer_aksi') ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama Customer</label>
                                        <input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
                                        <input type="text" name="nama" autocomplete="off" class="form-control"
                                            value="<?php echo $cs->nama ?>">
                                        <?php echo form_error('nama', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" autocomplete="off" class="form-control"
                                            value="<?php echo $cs->alamat ?>">
                                        <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Gender</label>
                                        <select class="form-control" name="gender">
                                            <option value="<?php echo $cs->gender ?>"><?php echo $cs->gender ?></option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?php echo form_error('gender', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>No Hp</label>
                                        <input type="text" name="no_telepon" autocomplete="off" class="form-control"
                                            value="<?php echo $cs->no_telepon ?>">
                                        <?php echo form_error('no_telepon', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>No KTP</label>
                                        <input type="text" name="no_ktp" autocomplete="off" class="form-control"
                                            value="<?php echo $cs->no_ktp ?>" readonly>
                                        <?php echo form_error('no_ktp', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Username</label>
                                        <input type="text" name="username" autocomplete="off" class="form-control"
                                            value="<?php echo $cs->username ?>">
                                        <?php echo form_error('username', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Password</label>
                                        <input type="text" name="password" autocomplete="off" class="form-control"
                                            value="<?php echo $cs->password ?>">
                                        <?php echo form_error('password', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Simpan Data</button>
                            </form>
                            <?php endforeach; ?>
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