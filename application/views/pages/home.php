<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SISTEM PKL/TA</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/css/app.min.css') ?>">
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
            <div class="card">
              <div class="card-body my-3">
                <div class="row mb-5">
                  <div class="col-md-4 my-1 mx-0">
                    <a href="<?= base_url('registrasi/add') ?>" class="btn btn-lg btn-block btn-info text-white py-lg-3">Registrasi KP</a>
                  </div>
                  <div class="col-md-4 my-1 mx-0">
                    <a href="<?= base_url('registrasi/add_ta') ?>" class="btn btn-lg btn-block btn-warning py-lg-3">Registrasi TA</a>
                  </div>
                  <div class="col-md-4 my-1 mx-0">
                    <button class="btn btn-lg btn-block btn-success py-lg-3 dropdown-toggle" type="button" id="dropdownJurnal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Jurnal
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownJurnal">
                      <a class="dropdown-item" href="<?= base_url('jurnal') ?>">Lihat Jurnal</a>
                      <a class="dropdown-item" href="<?= base_url('jurnal/add') ?>">Tambah Jurnal</a>
                    </div>
                  </div>
                </div>
                <form action="<?= base_url('home/get_nim') ?>" method="POST">
                  <div class="row">
                    <div class="col-8 mx-auto mx-md-0">
                      <p class="mb-0 text-secondary">Cek Status Pendaftaran</p>
                    </div>
                    <div class="col-md-9">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-id-card"></i>
                            </div>
                          </div>
                          <input id="nim_mhs" type="text" class="form-control" name="nim_mhs" autofocus placeholder="NIM">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <button type="submit" class="btn btn-lg btn-block btn-primary">Cek Status</button>
                    </div>
                  </div>
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
  <script src="<?= base_url('assets/bundles/jquery-ui/jquery-ui.min.js') ?>"></script>
  <script src="<?= base_url('assets/bundles/izitoast/js/iziToast.min.js') ?>"></script>
  <!-- Page Specific JS File -->
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