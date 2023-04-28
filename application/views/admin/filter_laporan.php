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
            <!-- end row -->
            <!-- begin row -->
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
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i>
                                        Filter
                                        Data</button>
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