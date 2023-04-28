<!DOCTYPE html>
<html lang="en">

<head>

     <?php $this->load->view('partials_customer/header'); ?>

</head>

<body>

     <?php $this->load->view('partials_customer/navbar'); ?>

     <div class="app-main" id="main">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 mt-5">
                         <div class="card-header alert alert-dark text-white">
                              INVOICE PEMBAYARAN ANDA
                         </div>
                    </div>
                    <?php foreach ($bukti as $dt): ?>
                         <div class="col-xl-12">
                              <div class="card card-statistics">
                                   <div class="card-header">
                                        <div class="card-heading">
                                             <div class="alert border-0 alert-dark bg-gradient alert-dismissible fade show border-radius-none"
                                                  role="alert">
                                                  <strong>Selamat Datang!</strong> Silahkan pilih pesanan mobil untuk
                                                  kebutuhan
                                                  anda.
                                             </div>
                                        </div>
                                   </div>
                                   <div class="card-body">
                                        <form method="POST"
                                             action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>"
                                             enctype="multipart/form-data">
                                             <div class="row">
                                                  <div class="col-md-12">
                                                       <div class="form-group">
                                                            <label>Upload Bukti Pembayaran</label>
                                                            <input type="hidden" name="id_rental" class="form-control"
                                                                 value="<?php echo $dt->id_rental ?>">
                                                            <input type="file" name="bukti_pembayaran" class="form-control">
                                                       </div>
                                                  </div>
                                        </form>
                                        <button type="submit" class="btn btn-success mt-3">Simpan Pesanan</button>
                                   </div>
                              </div>
                         </div>
                    <?php endforeach; ?>
               </div>
          </div>
     </div>
     </div>

     <?php $this->load->view('partials_customer/footer'); ?>

     <?php $this->load->view('partials_customer/js'); ?>

</body>

</html>