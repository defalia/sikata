<!-- Main Content -->
<?php $no = 1; ?>
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Data Dosen</h4>
            </div>
            <div class="card-body">
              <div class="text-right mb-2">
                <button class="btn btn-primary rounded-circle" data-toggle="modal" data-target="#modalAddDosen"><i class="fas fa-plus"></i></button>
              </div>
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>NIP</th>
                      <th>Nama Dosen</th>
                      <th>Program Studi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($dosen as $d) : ?>
                      <tr>
                        <td><?php echo $d['nip'] ?></td>
                        <td><?php echo $d['nama_dosen'] ?></td>
                        <td><?php echo $d['nama_prodi'] ?></td>
                        <td>
                          <a class="btn btn-danger btn-sm text-white" onclick="return confirm('Data Akan Dihapus?')" href="<?php echo base_url() ?>dosen/delete/<?php echo $d['nip'] ?>">
                            <i class="fas fa-trash"></i>
                          </a>
                          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEditDosen" data-nama_dosen="<?= $d['nama_dosen'] ?>" data-nip="<?= $d['nip'] ?>" data-id_prodi="<?= $d['id_prodi'] ?>" data-jabatan_fungsional="<?= $d['jabatan_fungsional'] ?>">
                            <i class="fas fa-pencil-alt"></i>
                          </button>
                        </td>
                      </tr>
                    <?php
                    endforeach; ?>
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
<!-- MODAL ADD PROGRAM STUDI -->
<div class="modal fade" id="modalAddDosen" tabindex="-1" role="dialog" aria-labelledby="modalAddDosenTitle" aria-hidden="true">
  <form action="<?= base_url('dosen/add_action') ?>" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAddDosenTitle">Tambah Dosen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" id="nip" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="nama_dosen">Nama Dosen</label>
            <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="id_prodi">Program Studi</label>
            <select name="id_prodi" id="id_prodi" class="form-control" required>
              <option value="">Pilih Program Studi</option>
              <?php foreach ($prodi as $p) : ?>
                <option value="<?= $p['id_prodi'] ?>"><?= $p['nama_prodi'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="jabatan_fungsional">Jabatan Fungsional</label>
            <input type="text" name="jabatan_fungsional" id="jabatan_fungsional" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- MODAL EDIT PROGRAM STUDI -->
<div class="modal fade" id="modalEditDosen" tabindex="-1" role="dialog" aria-labelledby="modalAddDosenTitle" aria-hidden="true">
  <form action="<?= base_url('dosen/edit_action') ?>" id="formEditDosen" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAddDosenTitle">Edit Program Studi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" id="nip" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="nama_dosen">Nama Dosen</label>
            <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="id_prodi">Program Studi</label>
            <select name="id_prodi" id="id_prodi" class="form-control">
              <option value="">Pilih Program Studi</option>
              <?php foreach ($prodi as $p) : ?>
                <option value="<?= $p['id_prodi'] ?>"><?= $p['nama_prodi'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="jabatan_fungsional">Jabatan Fungsional</label>
            <input type="text" name="jabatan_fungsional" id="jabatan_fungsional" class="form-control">
          </div>
          <input type="hidden" name="current_nip" id="current_nip">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </form>
</div>