<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SISTEM INFORMASI GEOGRAFIS DAERAH RAWAN KEJAHATAN </title>

  <!-- BOOTSTRAP STYLES-->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" />
  <!-- TABLE STYLES-->
  <link href="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
  <style>
    .jumbotron2 {
      position: relative;
      background: #fff center center;
      width: 100%;
      height: 80px;
      background-size: cover;
      overflow: hidden;
    }

    .footer {
      position: button;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 55px;
      background-color: black;
      color: white;
      text-align: center;
    }
  </style>
  <?php echo $map['js']; ?>
</head>

<body>
  <!-- ========================================================================================================================================================-->


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-home"></i></a></li>
          <li><a href="<?php echo base_url("admin/datakejahatan"); ?>">Data Kejahatan</a></li>
          <li><a href="<?php echo base_url("admin/inputkejahatan"); ?>">Input Data</a></li>
          <li><a href="<?php echo base_url("admin/register"); ?>">Tambah Admin</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-users"></i>Logout<span></span></a></li>
        </ul>
      </div>
    </div>
  </nav>