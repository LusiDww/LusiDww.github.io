<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    <a>e-Library | </a>&copy; Copyright <strong><span>LNR3</span></strong>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/quill/quill.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/chart.js/chart.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/echarts/echarts.min.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>

<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
</script>

</body>

</html>