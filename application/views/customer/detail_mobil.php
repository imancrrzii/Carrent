<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('partials_customer/header'); ?>

</head>

<body>

    <?php $this->load->view('partials_customer/navbar'); ?>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <?php foreach ($detail as $dt): ?>
                    <div class="row">
                        <div class="col-md-6">
                            <img style="width: 90%" src="<?php echo base_url('assets/upload/' . $dt->gambar) ?>">
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <th>Merk</th>
                                    <td>
                                        <?php echo $dt->merk ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>No.Mobil</th>
                                    <td>
                                        <?php echo $dt->no_plat ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Warna</th>
                                    <td>
                                        <?php echo $dt->warna ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tahun Produksi</th>
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
                                        <?php echo number_format($dt->denda, 0, ',', '.') ?> /Day
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <?php if ($dt->status == "1") {
                                            echo "Tersedia";
                                        } else {
                                            echo "Tidak Tersedia/Telah dirental";
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <?php
                                        if ($dt->status == "0") {
                                            echo "<span class='btn btn-danger' disable>Telah Dirental</span>";
                                        } else {
                                            echo anchor('customer/rental/tambah_rental/' . $dt->id_mobil, '<button class="btn btn-success">Rental</button>');
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php $this->load->view('partials_customer/footer'); ?>

    <?php $this->load->view('partials_customer/js'); ?>

</body>

</html>