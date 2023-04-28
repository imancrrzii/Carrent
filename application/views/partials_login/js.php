<script src="<?php echo base_url('assets') ?>/js/app.js"></script>
<?php
    $pesan = $this->session->flashdata('gagal');
    if (!empty($pesan)) :
    ?>
<script>
$(window).on('load', function() {
    let pesan = "<?= $pesan ?>";
    swal("Opss!", pesan, 'error');
});
</script>
<?php endif; ?>
<?php
    $pesan = $this->session->flashdata('cek');
    if (!empty($pesan)) :
    ?>
<script>
$(window).on('load', function() {
    let pesan = "<?= $pesan ?>";
    swal("Mohon Menunggu Sebentar", pesan, 'info');
});
</script>
<?php endif; ?>