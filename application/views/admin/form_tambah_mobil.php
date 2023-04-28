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
                <h1>Tambah Data Mobil</h1>
            </div>

            <div class="row">
                <div class="col-xxl-6 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi') ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Tipe Kendaraan</label>
                                        <select name="kode_type" class="form-control" required="">
                                            <option value="">Pilih Tipe Kendaraan</option>
                                            <?php foreach ($type as $tp) : ?>
                                            <option value="<?php echo $tp->kode_type ?>">
                                                <?php echo $tp->nama_type ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nama Jenis Kendaraan</label>
                                        <input type="text" name="merk" autocomplete="off" class="form-control"
                                            placeholder="eg : Toyota Avanza" required="">
                                        <?php echo form_error('merk', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>No. Plat</label>
                                        <input type="text" name="no_plat" autocomplete="off" class="form-control"
                                            placeholder="eg : B 6628 WGF" required="">
                                        <?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Warna</label>
                                        <input type="text" name="warna" autocomplete="off" class="form-control"
                                            placeholder="eg : Hitam Metalic" required="">
                                        <?php echo form_error('warna', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Harga Sewa /Hari</label>
                                        <input type="number" name="harga" autocomplete="off" class="form-control"
                                            placeholder="eg : Rp 350,000" required="">
                                        <?php echo form_error('harga', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Denda</label>
                                        <input type="number" name="denda" autocomplete="off" class="form-control"
                                            placeholder="eg : Rp 30,000" required="">
                                        <?php echo form_error('denda', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tahun Keluaran</label>
                                        <input type="text" name="tahun" autocomplete="off" class="form-control"
                                            placeholder="eg : 2018" required="">
                                        <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div') ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Gambar</label>
                                        <input type="file" name="gambar" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Status</label>
                                        <select name="status" class="form-control" required="">
                                            <option value="">Pilih Status</option>
                                            <option value="1">Tersedia</option>
                                            <option value="0">Tidak Tersedia</option>
                                        </select>
                                        <?php echo form_error('status', '<div class="text-small text-danger">', '</div') ?>
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