<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <?php if ($this->session->flashdata('verif_success')) : ?>
        <div class="alert alert-success alert-dismissible fade show">
          <?php echo $this->session->flashdata('verif_success'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h4>Data Jurnal</h4>
            </div>
            <div class="card-body">
              <?php $no = 1; ?>
              <div class="table-responsive d-none d-md-block">
                <table class="table table-striped" id="table-1">
                  <thead class="text">
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Jurnal</th>
                    <th>Status</th>
                  </thead>
                  <tbody>
                    <?php foreach ($jurnal as $key) : ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $key['judul'] ?></td>
                        <td><?php echo $key['nama_mhs'] ?></td>
                        <td><?php echo $key['nim_mhs'] ?></td>
                        <td>
                          <a href="<?php echo base_url(); ?>assets/uploads/jurnal/<?php echo $key['file_jurnal'] ?>" target="_blank">
                            <?php echo $key['file_jurnal'] ?>
                          </a>
                        </td>
                        <td>
                          <?php if ($key['status'] == 'Disetujui') : ?>
                            <span class="badge badge-success"><?= $key['status'] ?></span>
                          <?php else : ?>
                            <span class="badge badge-danger"><?= $key['status'] ?></span>
                          <?php endif; ?>
                        </td>
                      </tr>
                      <?php $no++; ?>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <?php $no = 1; ?>
              <div class="d-block d-md-none">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($jurnal as $key) : ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $key['nama_mhs'] ?></td>
                        <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKaprodiShowRekapJurnal" data-nim="<?= $key['nim_mhs'] ?>" data-nama="<?= $key['nama_mhs'] ?>" data-tahun="<?= $key['tahun'] ?>" data-file_jurnal="<?= $key['file_jurnal'] ?>" data-judul="<?= $key['judul'] ?>" data-keterangan="<?= $key['status_registrasi'] ?>" data-status="<?= $key['status'] ?>">
                            <i class="fas fa-eye"></i>
                          </button>
                        </td>
                      </tr>
                      <?php $no++; ?>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- MODAL VIEW KP -->
<div class="modal fade" id="modalKaprodiShowRekapJurnal" tabindex="-1" role="dialog" aria-labelledby="modalKaprodiShowRekapJurnalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKaprodiShowRekapJurnalTitle">Data Jurnal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="mb-0"><b>Nama</b></p>
        <p id="nama"></p>
        <p class="mb-0"><b>NIM</b></p>
        <p id="nim"></p>
        <p class="mb-0"><b>SMT/Tahun Ajaran</b></p>
        <p id="tahun"></p>
        <p class="mb-0 mt-3"><b>Judul</b></p>
        <p id="judul"></p>
        <p class="mb-0"><b>File Jurnal</b></p>
        <a id="file_jurnal" target="_blank"></a>
        <p class="mb-0 mt-3"><b>Status</b></p>
        <p id="status"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>