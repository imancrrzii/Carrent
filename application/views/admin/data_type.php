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
                <h1>Data Tipe</h1>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="datatable-wrapper table-responsive">
                                <a href="<?php echo base_url('admin/data_type/tambah_type') ?>"
                                    class="btn btn-primary mb-2"><i class="fe fe-edit"></i> Tambah Tipe</a>
                                <table id="datatable" class="display compact table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tipe ID</th>
                                            <th>Nama Tipe</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($type as $tp): ?>
                                        <tr>
                                            <td>
                                                <?php echo $no++ ?>
                                            </td>
                                            <td>
                                                <?php echo $tp->kode_type ?>
                                            </td>
                                            <td>
                                                <?php echo $tp->nama_type ?>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-warning mr-2"
                                                        href="<?php echo base_url('admin/data_type/update_type/' . $tp->id_type) ?>"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a class="btn btn-danger"
                                                        href="<?php echo base_url('admin/data_type/delete_type/' . $tp->id_type) ?>"><i
                                                            class="fas fa-trash"></i></a>
                                                </div>
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