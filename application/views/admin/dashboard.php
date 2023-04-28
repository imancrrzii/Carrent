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
                <h1>Dashboard</h1>
            </div>

            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="alert border-0 alert-primary bg-gradient alert-dismissible fade show border-radius-none"
                        role="alert">
                        Hallo, <strong>
                            <?php echo $this->session->userdata('nama') ?> -
                            <?php echo $this->session->userdata('no_ktp') ?>
                        </strong> Silahkan kelola pesanan mobil untuk kebutuhan pelanggan.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="ti ti-close"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php $this->load->view('partials_admin/footer'); ?>

    <?php $this->load->view('partials_admin/js'); ?>

</body>

</html>