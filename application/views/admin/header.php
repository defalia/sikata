<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SISTEM PKL/TA</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/css/app.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/bundles/datatables/datatables.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/bundles/izitoast/css/iziToast.min.css') ?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/components.css') ?>">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url('assets/img/favicon.ico') ?>' />

</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li>
              <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                <i data-feather="align-justify"></i>
              </a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?= base_url('assets/img/user.png') ?>" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Admin</div>
              <a href="#" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('admin/logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url('admin') ?>"> <img alt="image" src="<?= base_url('assets/img/logo.png') ?>" class="header-logo" /> <span class="logo-name">SiKaTa</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="<?= base_url('admin') ?>" class="nav-link"><i data-feather="monitor"></i><span>Tabel Registrasi</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Proses</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('admin/tabel_keuangan') ?>">Keuangan</a></li>
                <li><a class="nav-link" href="<?= base_url('admin/tabel_kaprodi') ?>">Kaprodi</a></li>
                <li><a class="nav-link" href="<?= base_url('admin/tabel_dekanat') ?>">Dekanat</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Akun</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('admin/keuangan') ?>">Keuangan</a></li>
                <li><a class="nav-link" href="<?= base_url('admin/kaprodi') ?>">Kaprodi</a></li>
                <li><a class="nav-link" href="<?= base_url('admin/dekanat') ?>">Dekanat</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Data Master</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('admin/prodi') ?>">Program Studi</a></li>
                <li><a class="nav-link" href="<?= base_url('admin/dosen') ?>">Dosen</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>