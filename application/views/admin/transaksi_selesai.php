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
                                <table id="datatable" class="display compact table table-striped table-bordered">

                                    <div class="row">
                                        <div class="col-xxl-6 m-b-30">
                                            <div class="card card-statistics h-100 mb-0">
                                                <div class="card-header">
                                                    <h4 class="card-title text-purple">Transaksi Pesanan Selesai</h4>
                                                </div>
                                                <div class="card-body">
                                                    <?php foreach ($transaksi as $tr): ?>
                                                    <form method="POST"
                                                        action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi') ?>">
                                                        <input type="hidden" name="id_rental"
                                                            value="<?php echo $tr->id_rental ?>">
                                                        <input type="hidden" name="tanggal_kembali"
                                                            value="<?php echo $tr->tanggal_kembali ?>">
                                                        <input type="hidden" name="denda"
                                                            value="<?php echo $tr->denda ?>">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Tanggal Pengembalian</label>
                                                                <input type="date" name="tanggal_pengembalian"
                                                                    class="form-control"
                                                                    value="<?php echo $tr->tanggal_pengembalian ?>">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Status Pengembalian</label>
                                                                <select name="status_pengembalian" class="form-control">
                                                                    <option
                                                                        value="<?php echo $tr->status_pengembalian ?>">
                                                                        <?php echo $tr->status_pengembalian ?></option>
                                                                    <option value="Kembali">Kembali</option>
                                                                    <option value="Belum Kembali">Belum Kembali</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Status Rental</label>
                                                                <select name="status_rental" class="form-control">
                                                                    <option value="<?php echo $tr->status_rental ?>">
                                                                        <?php echo $tr->status_rental ?></option>
                                                                    <option value="Selesai">Selesai</option>
                                                                    <option value="Belum Selesai">Belum Selesai</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-primary">Simpan
                                                            Data</button>
                                                    </form>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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