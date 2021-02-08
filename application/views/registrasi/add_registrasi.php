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
          <div class="col-12">
            <h1 class="text-center">SiKaTa</h1>
            <ol class="breadcrumb bg-transparent">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>" class="text-info">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Registrasi KP</li>
            </ol>
          </div>
          <?php if ($this->session->flashdata('nim_existing')) : ?>
            <div class="alert alert-danger alert-dismissible fade show">
              <?php echo $this->session->flashdata('nim_existing'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          <?php if ($this->session->flashdata('bukti_bayar')) : ?>
            <div class="alert alert-danger alert-dismissible fade show">
              <?php echo $this->session->flashdata('bukti_bayar'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          <?php if ($this->session->flashdata('monitoring')) : ?>
            <div class="alert alert-danger alert-dismissible fade show">
              <?php echo $this->session->flashdata('monitoring'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          <div class="col-12">
            <form action="<?= base_url('registrasi/action_add') ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-4 my-2">
                  <div class="card card-info h-100">
                    <div class="card-header">
                      <h4>Data Pribadi Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="nama_mhs">Nama Lengkap</label>
                        <input id="nama_mhs" type="text" class="form-control" name="nama_mhs" required>
                      </div>
                      <div class="form-group">
                        <div class="d-block">
                          <label for="nim_mhs" class="control-label">NIM</label>
                        </div>
                        <input id="nim_mhs" type="text" class="form-control" name="nim_mhs" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 my-2">
                  <div class="card card-info h-100">
                    <div class="card-header">
                      <h4>Data Akademik Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="nama_prodi">Pilih Program Studi</label>
                        <select name="nama_prodi" id="nama_prodi" class="form-control" required>
                          <option value="">Pilih Program Studi</option>
                          <?php foreach ($prodi as $p) : ?>
                            <option value="<?= $p['nama_prodi'] ?>"><?= $p['nama_prodi'] ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="tahun">Pilih SMT/Tahun Akademik</label>
                        <select name="tahun" id="tahun" class="form-control" required>
                          <option value="">Pilih SMT/Tahun Akademik</option>
                          <option value="Genap/<?= date('Y') . '-' . date('Y', strtotime(date("Y-m-d", time()) . " + 365 day")) ?>">Genap/<?= date('Y') . '-' . date('Y', strtotime(date("Y-m-d", time()) . " + 365 day")) ?></option>
                          <option value="Ganjil/<?= date('Y') . '-' . date('Y', strtotime(date("Y-m-d", time()) . " + 365 day")) ?>">Ganjil/<?= date('Y') . '-' . date('Y', strtotime(date("Y-m-d", time()) . " + 365 day")) ?></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 my-2">
                  <div class="card card-info h-100">
                    <div class="card-header">
                      <h4>Data Kerja Praktik</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="judul_pkl">Rencana Judul</label>
                        <input id="judul_pkl" type="text" class="form-control" name="judul_pkl" required>
                      </div>
                      <div class="form-group">
                        <label for="bukti_bayar">Upload Bukti Pembayaran</label>
                        <input id="bukti_bayar" type="file" class="form-control" name="bukti_bayar" required>
                      </div>
                      <div class="form-group">
                        <label for="monitoring">Upload Monitoring Nilai</label>
                        <input id="monitoring" type="file" class="form-control" name="monitoring" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mx-auto mt-4">
                  <button type="submit" class="btn btn-lg btn-info btn-block">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-12">
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
      iziToast.error({
        title: "Success",
        message: "<?= $this->session->flashdata('alert_success') ?>",
        position: "topRight"
      })
    <?php endif; ?>
  </script>
</body>

</html>