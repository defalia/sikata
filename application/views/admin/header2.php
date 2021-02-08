<!doctype html>
<html lang="en">

<head>
  <title>Admin Dasboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="<?php echo base_url() ?>assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">

      <a href="<?php echo base_url() ?>admin" class="simple-text logo-normal">
        ADMIN
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>admin">
            <i class="material-icons">dashboard</i>
            <p>Tabel Registrasi</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>admin/tabel_keuangan">
            <i class="material-icons">dashboard</i>
            <p>Tabel Proses Keuangan</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>admin/tabel_kaprodi">
            <i class="material-icons">dashboard</i>
            <p>Tabel Proses Kaprodi</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>admin/tabel_dekanat">
            <i class="material-icons">dashboard</i>
            <p>Tabel Proses Dekanat</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>admin/keuangan">
            <i class="material-icons">dashboard</i>
            <p>Data User Keuangan</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>admin/kaprodi">
            <i class="material-icons">dashboard</i>
            <p>Data User Kaprodi</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>admin/dekanat">
            <i class="material-icons">dashboard</i>
            <p>Data User Dekanat</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="<?php echo base_url() ?>admin/logout">
            <i class="material-icons">dashboard</i>
            <p>Logout</p>
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
        
    