<script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/core/bootstrap.min.js"
    type="text/javascript"></script>
<script src="https://demos.creative-tim.com/soft-ui-design-system/assets/js/soft-design-system.min.js?v=1.0.5"
    type="text/javascript"></script>
<script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/countup.min.js"
    type="text/javascript"></script>
<script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/flatpickr.min.js"></script>
<?php
$pesan = $this->session->flashdata('berhasil');
if (!empty($pesan)) :
?>
<script>
$(window).on('load', function() {
    let pesan = "<?= $pesan ?>";
    swal("Successfully!", pesan, 'success');
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
<script>
if ($("#state1").length) {
    const countUp = new CountUp("state1", $("#state1").attr("countTo"));
    if (!countUp.error) {
        countUp.start();
    } else {
        console.error(countUp.error);
    }
}
if ($("#state2").length) {
    const countUp1 = new CountUp("state2", $("#state2").attr("countTo"));
    if (!countUp1.error) {
        countUp1.start();
    } else {
        console.error(countUp1.error);
    }
}
if ($("#state3").length) {
    const countUp2 = new CountUp("state3", $("#state3").attr("countTo"));
    if (!countUp2.error) {
        countUp2.start();
    } else {
        console.error(countUp2.error);
    };
}

if ($('.datepicker-1').length) {
    $('.datepicker-1').flatpickr({}); // flatpickr
}

if ($('.datepicker-2').length) {
    $('.datepicker-2').flatpickr({}); // flatpickr
}
</script>