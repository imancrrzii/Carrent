<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
        <a class="navbar-brand w-8" href="#" data-config-id="brand">
            <img src="<?= base_url('assets/assets_shop') ?>/images/car-rental.png" height="40" width="40" alt="">
        </a>

        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item mx-2">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link ps-2 cursor-pointer">
                        <b>Home</b>
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a href="<?= base_url('customer/transaksi') ?>" class="nav-link ps-2 cursor-pointer">
                        <b>History</b>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ms-2">
                    <?php if ($this->session->userdata('nama')) { ?>
                    <a href="<?= base_url('auth/logout') ?>" class="btn bg-gradient-light mb-0">
                        Hi, <?= $this->session->userdata('nama') ?> | Logout
                    </a>
                    <?php } else { ?>
                    <a href="<?= base_url('auth/login') ?>" class="btn bg-gradient-light mb-0">Masuk
                    </a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </div>
</nav>