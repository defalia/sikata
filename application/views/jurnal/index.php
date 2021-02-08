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
              <li class="breadcrumb-item active" aria-current="page">Lihat Jurnal</li>
            </ol>
            <div class="card card-success">
              <div class="card-body my-3">
                <div class="d-none d-md-block">
                  <table class="table" id="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($jurnal as $index => $j) : ?>
                        <tr>
                          <td><?= $index + 1 ?></td>
                          <td><?= $j['judul'] ?></td>
                          <td><?= $j['nama_mhs'] ?></td>
                          <td><?= $j['nim_mhs'] ?></td>
                          <td><button class="btn btn-sm btn-primary" data-target="#modalPreviewJurnal" data-toggle="modal" data-file_jurnal="<?= $j['file_jurnal'] ?>"><i class="fas fa-eye"></i></button></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <div class="d-block d-md-none">
                  <table class="table" id="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($jurnal as $index => $j) : ?>
                        <tr>
                          <td><?= $index + 1 ?></td>
                          <td><?= $j['judul'] ?></td>
                          <td><button class="btn btn-sm btn-primary" data-target="#modalPreviewJurnal" data-toggle="modal" data-file_jurnal="<?= $j['file_jurnal'] ?>"><i class="fas fa-eye"></i></button></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
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
  <!-- MODAL VIEW JURNAL -->
  <div class="modal fade" id="modalPreviewJurnal" tabindex="-1" role="dialog" aria-labelledby="modalPreviewJurnalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalPreviewJurnalTitle">Preview Jurnal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <iframe src="" frameborder="0" id="iframeJurnal" class="w-100" style="min-height: 50vh"></iframe>
          <div class="text-center">
            <a href="#" class="btn btn-success btn-sm" id="button_download" target="_blank">Download</a>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
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
    $(document).ready(function() {
      $('table').DataTable();
    });

    $('#modalPreviewJurnal').on('show.bs.modal', function(event) {
      let button = $(event.relatedTarget)
      let file_jurnal = button.data('file_jurnal')

      let modal = $(this)
      modal.find('#iframeJurnal').attr('src', "<?= base_url('assets/uploads/jurnal/') ?>" + file_jurnal)
      modal.find('#button_download').attr('href', "<?= base_url('assets/uploads/jurnal/') ?>" + file_jurnal)
    })
  </script>

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