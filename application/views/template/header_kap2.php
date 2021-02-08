<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- Material Kit CSS -->
	<link href="<?php echo base_url() ?>assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  
</head>
<body class="d-flex flex-column h-100 mb-3">

  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">

      <a href="<?php echo base_url() ?>keuangan" class="simple-text logo-normal">
        PROGRAM STUDI
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>kaprodi/pkl">
            <i class="material-icons">assignment</i>
            <p>Data Mahasiswa KP</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>kaprodi/ta">
            <i class="material-icons">description</i>
            <p>Data Mahasiswa TA</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>kaprodi/rekap_pkl">
            <i class="material-icons">folder</i>
            <p>Lihat Rekap KP</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>kaprodi/rekap_ta">
            <i class="material-icons">folder</i>
            <p>Lihat Rekap TA</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>kaprodi/logout">
            <i class="material-icons">power_settings_new</i>
            <p>Keluar</p>
          </a>
        </li>
        <!-- your sidebar here -->
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
