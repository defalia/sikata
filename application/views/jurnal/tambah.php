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
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-10 mx-auto">
            <h1 class="text-center">SiKaTa</h1>
            <p class="text-center d-lg-none">
              Sistem Informasi Kerja Praktek dan Tugas Akhir
              <br>
              Fakultas Teknik Universitas Krisnadwipayana
            </p>
            <div class="login-brand d-none d-lg-block">
              "Sistem Informasi Kerja Praktek dan Tugas Akhir"
              <br>
              Fakultas Teknik Universitas Krisnadwipayana
            </div>
            <ol class="breadcrumb bg-transparent">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>" class="text-success">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Jurnal</li>
            </ol>
            <div class="card card-success">
              <div class="card-body my-3">
                <form action="<?= base_url('jurnal/action_add') ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="nim_mhs">NIM</label>
                    <input type="text" name="nim_mhs" id="nim_mhs" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="nomor_sk">Nomor SK</label>
                    <input type="text" name="nomor_sk" id="nomor_sk" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="file_jurnal">File Jurnal</label>
                    <input type="file" name="file_jurnal" id="file_jurnal" class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-success btn-block">Upload</button>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; SIKATA <?= date('Y') ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?= base_url('assets/js/app.min.js') ?>"></script>
  <!-- JS Libraies -->
  <script src="<?= base_url('assets/bundles/datatables/datatables.min.js') ?>"></script>
  <script src="<?= base_url('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('assets/bundles/jquery-ui/jquery-ui.min.js') ?>"></script>
  <script src="<?= base_url('assets/bundles/izitoast/js/iziToast.min.js') ?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/js/page/datatables.js') ?>"></script>
  <!-- Template JS File -->
  <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
  <!-- Custom JS File -->
  <script src="<?= base_url('assets/js/custom.js') ?>"></script>
  <script>
    <?php if ($this->session->flashdata('alert_error')) : ?>
      iziToast.error({
        title: "Error",
        message: "<?= $this->session->flashdata('alert_error') ?>",
        position: "topRight"
      })
    <?php endif; ?>
    <?php if ($this->session->flashdata('alert_success')) : ?>
      iziToast.success({
        title: "Success",
        message: "<?= $this->session->flashdata('alert_success') ?>",
        position: "topRight"
      })
    <?php endif; ?>
  </script>
</body>

</html>