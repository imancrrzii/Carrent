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
if (document.getElementById("state1")) {
    const countUp = new CountUp("state1", document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
        countUp.start();
    } else {
        console.error(countUp.error);
    }
}
if (document.getElementById("state2")) {
    const countUp1 = new CountUp("state2", document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
        countUp1.start();
    } else {
        console.error(countUp1.error);
    }
}
if (document.getElementById("state3")) {
    const countUp2 = new CountUp("state3", document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
        countUp2.start();
    } else {
        console.error(countUp2.error);
    };
}

if (document.querySelector('.datepicker-1')) {
    flatpickr('.datepicker-1', {});
}

if (document.querySelector('.datepicker-2')) {
    flatpickr('.datepicker-2', {});
}
</script>