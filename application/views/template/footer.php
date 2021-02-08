<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; <?= date('Y') ?> <div class="bullet"></div> Design By <a href="#">Redstar</a>
  </div>
  <div class="footer-right">
  </div>
</footer>
</div>
</div>
<!-- General JS Scripts -->
<script src="<?= base_url('assets/js/app.min.js') ?>"></script>
<!-- JS Libraies -->
<script src="<?= base_url('assets/bundles/datatables/datatables.min.js') ?>"></script>
<script src="<?= base_url('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/bundles/jquery-ui/jquery-ui.min.js') ?>"></script>
<script src="<?= base_url('assets/bundles/izitoast/js/iziToast.min.js') ?>"></script>
<!-- Page Specific JS File -->
<script src="<?= base_url('assets/js/page/datatables.js') ?>"></script>
<!-- Template JS File -->
<script src="<?= base_url('assets/js/scripts.js') ?>"></script>
<!-- Custom JS File -->
<script src="<?= base_url('assets/js/custom.js') ?>"></script>

<script src="<?= base_url('assets/js/keuangan.js') ?>"></script>
<script src="<?= base_url('assets/js/kaprodi.js') ?>"></script>
<script src="<?= base_url('assets/js/dekanat.js') ?>"></script>

<script>
  $(document).ready(function() {
    $('table').DataTable();
  });
</script>

<script>
  <?php if ($this->session->flashdata('alert_error')) : ?>
    iziToast.error({
      title: "Error",
      message: "<?= $this->session->flashdata('alert_error') ?>",
      position: "topRight"
    })
  <?php endif; ?>
  <?php if ($this->session->flashdata('alert_success')) : ?>
    iziToast.success({
      title: "Success",
      message: "<?= $this->session->flashdata('alert_success') ?>",
      position: "topRight"
    })
  <?php endif; ?>
</script>

</html>