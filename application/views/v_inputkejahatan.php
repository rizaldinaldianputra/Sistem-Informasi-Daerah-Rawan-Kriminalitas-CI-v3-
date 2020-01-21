<?php include("header_admin.php"); ?>



<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <div class="panel panel-primary">
        <div class="panel-heading">Lokasi Kejahatan</div>
        <div class="panel-body">

          <input type="text" id="myPlaceTextBox" /> <br>

          <?php echo $map['html']; ?>

        </div>
        <div class="panel-footer">
        </div>
      </div>
    </div>

    <div class="col-sm-5">
      <div class="panel panel-primary">
        <div class="panel-heading">Input Data Kejahatan</div>
        <div class="panel-body">

          <?php
          echo validation_errors('<div class="alert alret-warning">', '</div>');
          if ($this->session->flashdata('sukses')) {
            echo '<div class="alert alert-warning">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
          }
          echo form_open(base_url('admin/inputkejahatan'), 'class="form-horizontal" entype="multipart/formdata"');
          ?>

          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-4 control-label"> Jenis Kejahatan </label>
              <div class="col-sm-8">
                <select type="text" name="jenis_kejahatan" class="form-control" placeholder="Jenis Kejahatan" value="<?php echo set_value('jenis_kejahatan') ?>" required>
                  <option value="">Silahkan Pilih</option>
                  <option value="Pencurian ">Pencurian</option>
                  <option value="Penculikan">Penculikan</option>
                  <option value="Narkoba">Narkoba</option>>
                  <option value="Pembunuhan">Pembunuhan</option>
                  <option value="Pemerkosaan">Pemerkosaan</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label"> Alamat </label>
              <div class="col-sm-8">
                <Input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?php echo set_value('alamat') ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label"> Tanggal </label>
              <div class="col-sm-8">
                <Input type="date" name="tanggal" class="form-control" placeholder="tanggal" value="<?php echo set_value('tanggal') ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label"> Latitude </label>
              <div class="col-sm-8">
                <Input type="text" name="latitude" class="form-control" placeholder="latitude" value="<?php echo set_value('latitude') ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label"> Long latitude </label>
              <div class="col-sm-8">
                <Input type="text" name="longitude" class="form-control" placeholder="longitude" value="<?php echo set_value('longitude') ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Keterangan </label>
              <div class="col-sm-8">
                <textarea type="text" name="keterangan" class="form-control" placeholder="keterangan" value="<?php echo set_value('keterangan') ?>" required> </textarea>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-4 control-label"></label>
              <div class="col-sm-8">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <button class="btn btn-success" type="submit">Reset</button>
              </div>
            </div>


          </form>

          <?php echo form_close(); ?>
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