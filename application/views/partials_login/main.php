<div class="app">
    <div class="app-wrap">

        <div class="app-contant">
            <div class="bg-white">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                            <div class="d-flex align-items-center h-100-vh">
                                <div class="login p-50">
                                    <h1 class="mb-2">Rental Mobil Pemweb</h1>
                                    <p>Masukkan Username dan Password anda</p>
                                    <form method="POST" action="<?php echo base_url('auth/login') ?>"
                                        class="mt-3 mt-sm-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input id="username" type="text" class="form-control"
                                                        autocomplete="off" name="username" tabindex="1" required
                                                        autofocus>
                                                    <div class="invalid-feedback">
                                                        Silahkan lengkapi username anda!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input id="password" type="password" class="form-control"
                                                        name="password" tabindex="2" required>
                                                    <div class="invalid-feedback">
                                                        Silahkan lengkapi sandi anda!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <button type="submit"
                                                    class="btn btn-primary text-uppercase">Masuk</button>
                                            </div>
                                            <div class="col-12  mt-3">
                                                <p>Belum punya akun ?<a href="<?php echo base_url('register') ?>">
                                                        Daftar</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                            <div class="row align-items-center h-100">
                                <div class="col-7 mx-auto ">
                                    <img class="img-fluid" src="<?php echo base_url('assets') ?>/img/bg/login.svg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>