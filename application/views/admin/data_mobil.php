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
                <h1>Data Mobil</h1>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="datatable-wrapper table-responsive">
                                <a href="<?php echo base_url('admin/data_mobil/tambah_mobil') ?>"
                                    class="btn btn-primary mb-2"><i class="fa fa-plus mr-1"></i> Tambah</a>
                                <table id="datatable" class="display compact table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Tipe</th>
                                            <th>Merk</th>
                                            <th>No Plat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($mobil as $mb): ?>
                                        <tr class="text-center">
                                            <td>
                                                <?php echo $no++ ?>
                                            </td>
                                            <td>
                                                <img width="60px"
                                                    src="<?php echo base_url() . 'assets/upload/' . $mb->gambar ?>">
                                            </td>
                                            <td>
                                                <?php echo $mb->kode_type ?>
                                            </td>
                                            <td>
                                                <?php echo $mb->merk ?>
                                            </td>
                                            <td>
                                                <?php echo $mb->no_plat ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if ($mb->status == "0") {
                                                        echo "<span class='badge badge-danger'> Tidak Tersedia
                                                    </span> ";
                                                    } else {
                                                        echo "<span class='badge badge-primary'> Tersedia
                                                    </span> ";
                                                    }
                                                    ?>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-primary mr-1"
                                                        href="<?php echo base_url('admin/data_mobil/detail_mobil/' . $mb->id_mobil) ?>"><i
                                                            class="fas fa-eye mr-1"></i>Detail</a>
                                                    <a class="btn btn-warning mr-1"
                                                        href="<?php echo base_url('admin/data_mobil/update_mobil/' . $mb->id_mobil) ?>"><i
                                                            class="fas fa-edit mr-1"></i>Edit</a>
                                                    <a class="btn btn-danger"
                                                        href="<?php echo base_url('admin/data_mobil/hapus_mobil/' . $mb->id_mobil) ?>"><i
                                                            class="fas fa-trash mr-1"></i>Hapus</a>
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