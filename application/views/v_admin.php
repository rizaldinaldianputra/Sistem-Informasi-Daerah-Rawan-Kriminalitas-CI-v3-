<?php include("header_admin.php"); ?>


<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Pemetaan Daerah Rawan Kejahatan</div>
        <div class="panel-body">
          <?php echo $map['html']; ?>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<!-- ======================================================================================================================================================-->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/morris/morris.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/js/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
  $(document).ready(function() {
    $('#tabel').dataTable();
  });
</script>

<script type="text/javascript">
  function setMapToForm(latitude, longitude) {
    $('input[name="latitude"]').val(latitude);
    $('input[name="longitude"]').val(longitude);
  }
</script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>