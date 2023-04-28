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
                                <a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>"
                                    class="btn btn-primary mb-2"><i class="fe fe-edit"></i> Tambah Pelanggan</a>
                                <table id="datatable" class="display compact table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Kelamin</th>
                                            <th>No Tlp</th>
                                            <th>No KTP</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($customer as $cs): ?>
                                        <tr>
                                            <td>
                                                <?php echo $no++ ?>
                                            </td>
                                            <td>
                                                <?php echo $cs->nama ?>
                                            </td>
                                            <td>
                                                <?php echo $cs->alamat ?>
                                            </td>
                                            <td>
                                                <?php echo $cs->gender ?>
                                            </td>
                                            <td>
                                                <?php echo $cs->no_telepon ?>
                                            </td>
                                            <td>
                                                <?php echo $cs->no_ktp ?>
                                            </td>
                                            <td>
                                                <?php echo $cs->username ?>
                                            </td>
                                            <td>
                                                <?php echo $cs->password ?>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-warning mr-2"
                                                        href="<?php echo base_url('admin/data_customer/update_customer/' . $cs->id_customer) ?>"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a class="btn btn-danger"
                                                        href="<?php echo base_url('admin/data_customer/delete_customer/' . $cs->id_customer) ?>"><i
                                                            class="fas fa-trash"></i></a>
                                                </div>
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