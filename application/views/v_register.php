<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- BOOTSTRAP STYLES-->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLES-->
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CUSTOM STYLES-->
	<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" />
	<!-- TABLE STYLES-->
	<link href="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>\
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<?php echo form_open('admin/register'); ?>
	<div class="col-sm-5">
		<div class="panel panel-primary">
			<div class="panel-heading">Form Pendaftaran User</div>
			<div class="panel-body">

				<form class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-4 control-label"> Nama :</label>
						<div class="col-sm-8">
							<input type="text" name="name" value="<?php echo set_value('name'); ?>" />
							<?php echo form_error('name'); ?>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label class="col-sm-4 control-label"> Username </label>
						<div class="col-sm-8">
							<input type="text" name="username" value="<?php echo set_value('username'); ?>" />
							<?php echo form_error('username'); ?>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label class="col-sm-4 control-label"> Email </label>
						<div class="col-sm-8">
							<input type="text" name="email" value="<?php echo set_value('email'); ?>" />
							<?php echo form_error('email'); ?>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label class="col-sm-4 control-label"> Password </label>
						<div class="col-sm-8">
							<input type="password" name="password" value="<?php echo set_value('password'); ?>" />
							<?php echo form_error('password'); ?>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label class="col-sm-4 control-label"> Re-Password </label>
						<div class="col-sm-8">
							<input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" />
							<?php echo form_error('password_conf'); ?>
						</div>
					</div>

					<br>

			</div>
		</div>
	</div>

	<div class="col-sm-8">
		<div class="panel panel-primary">
			<div class="panel-heading">Biodata</div>
			<div class="panel-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-4 control-label"> NIK </label>
						<div class="col-sm-8">
							<input type="text" name="No_ID" value="<?php echo set_value('No_ID'); ?>" />
							<?php echo form_error('name'); ?>
						</div>
					</div>

					<br>
					<div class="form-group">
						<label class="col-sm-4 control-label"> Alamat Lengkap </label>
						<div class="col-sm-8">
							<input type="text" name="Alamat" value="<?php echo set_value('Alamat'); ?>" />
							<?php echo form_error('Alamat'); ?>
						</div>
					</div>
					<br>
					<div class="form-group">
						<label class="col-sm-4 control-label"> Tanggal Lahir </label>
						<div class="col-sm-8">
							<input type="date" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir'); ?>" />
							<?php echo form_error('tanggal_lahir'); ?>
						</div>
					</div>

					<br>
					<br>
					<hr>
					<div class="form-group">
						<label class="col-sm-4 control-label"> No Handphone </label>
						<div class="col-sm-8">
							<input type="text" name="No_Handphone" value="<?php echo set_value('No.Handphone'); ?>" />
							<?php echo form_error('No_Handphone:'); ?>
						</div>
					</div>
					<br>
					<br>
					<div class="form-group">
						<label class="col-sm-4 control-label"> Jenis Kelamin </label>
						<div class="col-sm-4">
							<select type="text" class="form-control" name="Jenis_Kelamin" value="<?php echo set_value('Jenis_Kelamin'); ?>" />
							<?php echo form_error('Jenis_Kelamin'); ?>
							<option value="">Silahkan Pilih</option>
							<option value="Laki-Laki ">Laki</option>
							<option value="Penculikan">Penculikan</option>
							</select>
						</div>
					</div>
					<br>
					<br>
					<div class="col-sm-8">
						<div class="panel panel-primary">

							<div class="panel-body">
								<input type="submit" class="fa fa-primary" name="btnSubmit" id="btn" value="Daftar" />
							</div>
						</div>
					</div>
			</div>
		</div>

	</div>
	</div>
	</div>

</body>
<?php echo form_close(); ?>

</div>
<div class=" panel-footer">
</div>


</html>
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