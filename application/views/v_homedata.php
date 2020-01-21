<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Sistem informasi Geografis</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" />
  <!-- TABLE STYLES-->
  <link href="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/main.css" />

  <?php echo $map['js']; ?>
</head>

<body class="is-preload">


  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <center> <b>
              <h1> Daftar Kejahatan Kota Bogor</h1>
            </b> <br></center>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <?php
            if ($this->session->flashdata('sukses')) {
              echo '<div class="alert alert-warning">';
              echo $this->session->flashdata('sukses');
              echo '</div>';
            }
            ?>
            <table class="table table-striped table-bordered tabel-hover" id="tabel">
              <thead>
                <tr>
                  <th stylye="width : 50px">No</th>
                  <th> Kejahatan </th>
                  <th> Alamat </th>
                  <th> Tanggal </th>
                  <th> Latitude </th>
                  <th> Longitude </th>
                  <th> Keterangan </th>

                </tr>
              </thead>
              <?php $no = 1;
              foreach ($kejahatan as $kejahatan) { ?>
                <tr>
                  <td><?php echo $no++ ?>.</td>
                  <td><?php echo $kejahatan->jenis_kejahatan ?></td>
                  <td><?php echo $kejahatan->alamat ?></td>
                  <td><?php echo $kejahatan->tanggal ?></td>
                  <td><?php echo $kejahatan->latitude ?></td>
                  <td><?php echo $kejahatan->longitude ?></td>
                  <td><?php echo $kejahatan->keterangan ?></td>

                </tr>
              <?php } ?>
            </table>

          </div>

          <div class="panel-footer"></div>
        </div>
      </div>
    </div>
  </div>

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