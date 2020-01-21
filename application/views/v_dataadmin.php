<?php include("header_admin.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Data Admin </div>
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
                                    <th> Nama </th>
                                    <th> Username </th>
                                    <th> Email </th>
                                    <th stylye="width : 70px">Action</th>
                                </tr>
                            </thead>
                            <?php $no = 1;
                            foreach ($kejahatan as $kejahatan) { ?>
                                <tr>
                                    <td><?php echo $no++ ?>.</td>
                                    <td><?php echo $kejahatan->nama ?></td>
                                    <td><?php echo $kejahatan->username ?></td>
                                    <td><?php echo $kejahatan->Email ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/deleteadmin/' . $kejahatan->id); ?> " class="btn btn-danger btn-sm" type="button" onclick="return confirm('Yakin dihapus..?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>

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