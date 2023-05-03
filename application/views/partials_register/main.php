<div class="app-main mt-5" id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-b-30 mt-3">
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="card-header bg-primary text-white">
                        FORM PENDAFTARAN
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-statistics">
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('register') ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">Nama Lengkap</label>
                                        <input id="nama" type="text" class="form-control" name="nama" autocomplete="off"
                                            required="" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="d-block">Jenis Kelamin</label>
                                        <select class="form-control" name="gender" required="">
                                            <option>Pilih Kelamin Anda</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name">Username</label>
                                        <input id="username" type="text" class="form-control" autocomplete="off"
                                            required="" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Alamat</label>
                                        <input id="alamat" type="text" class="form-control" autocomplete="off"
                                            required="" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label>No Identitas Kependudukan (KTP)</label>
                                        <input type="text" name="no_ktp" class="form-control" autocomplete="off"
                                            required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_telepon" class="d-block">No Hp Pelanggan</label>
                                        <input type="number" class="form-control" autocomplete="off" name="no_telepon"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2"><i class="fas fa-save me-2"></i>Mulai
                                Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>