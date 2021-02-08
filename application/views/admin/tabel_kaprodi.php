<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Data Monitoring Mahasiswa Registrasi KP</h4>
            </div>
            <div class="card-body">
              <?php $no = 1; ?>
              <div class="table-responsive d-none d-md-block">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>SMT/Th. Akademik</th>
                      <th>Monitoring</th>
                      <th>Program Studi</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($registrasi as $key) : ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $key['nama_mhs'] ?></td>
                        <td><?php echo $key['nim_mhs'] ?></td>
                        <td><?php echo $key['tahun'] ?></td>
                        <td><a href="<?php echo base_url(); ?>assets/img/<?php echo $key['monitoring'] ?>" target="_blank"><?php echo $key['monitoring'] ?></a></td>
                        <td><?php echo $key['nama_prodi'] ?></td>
                        <td><?php echo $key['status_registrasi'] ?></td>
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
                      <th>NIM</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($registrasi as $key) : ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $key['nim_mhs'] ?></td>
                        <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalShowDataKaprodiKPAdmin" data-nim="<?= $key['nim_mhs'] ?>" data-nama="<?= $key['nama_mhs'] ?>" data-tahun="<?= $key['tahun'] ?>" data-monitoring="<?= $key['monitoring'] ?>" data-keterangan="<?= $key['status_registrasi'] ?>" data-prodi="<?= $key['nama_prodi'] ?>">
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
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Data Monitoring Mahasiswa Registrasi TA</h4>
            </div>
            <div class="card-body">
              <?php $no = 1; ?>
              <div class="table-responsive d-none d-md-block">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>SMT/Th. Akademik</th>
                      <th>Monitoring</th>
                      <th>Program Studi</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($registrasi_ta as $key) : ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $key['nama_mhs'] ?></td>
                        <td><?php echo $key['nim_mhs'] ?></td>
                        <td><?php echo $key['tahun'] ?></td>
                        <td><a href="<?php echo base_url(); ?>assets/img/<?php echo $key['monitoring'] ?>" target="_blank"><?php echo $key['monitoring'] ?></a></td>
                        <td><?php echo $key['nama_prodi'] ?></td>
                        <td><?php echo $key['status_registrasi'] ?></td>
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
                      <th>NIM</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($registrasi_ta as $key) : ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $key['nim_mhs'] ?></td>
                        <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalShowDataKaprodiTAAdmin" data-nim="<?= $key['nim_mhs'] ?>" data-nama="<?= $key['nama_mhs'] ?>" data-tahun="<?= $key['tahun'] ?>" data-monitoring="<?= $key['monitoring'] ?>" data-keterangan="<?= $key['status_registrasi'] ?>" data-prodi="<?= $key['nama_prodi'] ?>">
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
<div class="modal fade" id="modalShowDataKaprodiKPAdmin" tabindex="-1" role="dialog" aria-labelledby="modalShowDataKaprodiKPAdminTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalShowDataKaprodiKPAdminTitle">Data Monitoring Mahasiswa Registrasi KP</h5>
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
        <p class="mb-0"><b>Monitoring</b></p>
        <a id="monitoring" target="_blank"></a>
        <p class="mb-0 mt-3"><b>Program Studi</b></p>
        <p id="prodi"></p>
        <p class="mb-0"><b>Keterangan</b></p>
        <p id="keterangan"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL VIEW TA -->
<div class="modal fade" id="modalShowDataKaprodiTAAdmin" tabindex="-1" role="dialog" aria-labelledby="modalShowDataKaprodiTAAdminTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalShowDataKaprodiTAAdminTitle">Data Monitoring Mahasiswa Registrasi TA</h5>
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
        <p class="mb-0"><b>Monitoring</b></p>
        <a id="monitoring"></a>
        <p class="mb-0"><b>Program Studi</b></p>
        <p id="prodi"></p>
        <p class="mb-0"><b>Keterangan</b></p>
        <p id="keterangan"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>