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
                <h1>Detail Mobil</h1>
            </div>
        </section>

        <?php foreach ($detail as $dt): ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img style="width: 100%" src="<?php echo base_url() . 'assets/upload/' . $dt->gambar ?>">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td><b>Type Mobil</b></td>
                                <td>
                                    <?php
                                        if ($dt->kode_type == "SDN") {
                                            echo "Sedan";
                                        } elseif ($dt->kode_type == "MIB") {
                                            echo "Mini Bus";
                                        } elseif ($dt->kode_type == "MED") {
                                            echo "Medium Bus";
                                        } elseif ($dt->kode_type == "MTR") {
                                            echo "Motor";
                                        } else {
                                            echo "<span class='text-danger'>Type Mobil Belum Terdaftar</span>";
                                        }
                                        ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Merk</b></td>
                                <td>
                                    <?php echo $dt->merk ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>No.Plat</b></td>
                                <td>
                                    <?php echo $dt->no_plat ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Warna</b></td>
                                <td>
                                    <?php echo $dt->warna ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Tahun</b></td>
                                <td>
                                    <?php echo $dt->tahun ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Harga Sewa</th>
                                <td>Rp.
                                    <?php echo number_format($dt->harga, 0, ',', '.') ?> /Day
                                </td>
                            </tr>
                            <tr>
                                <th>Denda</th>
                                <td>Rp.
                                    <?php echo number_format($dt->denda, 0, ',', '.') ?>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Status</b></td>
                                <td>
                                    <?php
                                        if ($dt->status == "0") {
                                            echo "<span class='badge badge-danger'>Tidak Tersedia/Sedang dirental</span>";
                                        } else {
                                            echo "<span class='badge badge-success'>Tersedia</span>";
                                        }
                                        ?>
                                </td>
                            </tr>
                        </table>
                        <a class="btn btn-sm btn-danger ml-4"
                            href="<?php echo base_url('admin/data_mobil') ?>">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
    </div>