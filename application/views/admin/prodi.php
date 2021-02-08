<!-- Main Content -->
<?php $no = 1; ?>
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <?php if ($this->session->flashdata('success_alert') != NULL) :  ?>
        <div class="alert alert-success alert-dismissible fade show">
          <?php echo $this->session->flashdata('success_alert'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Data Program Studi</h4>
            </div>
            <div class="card-body">
              <div class="text-right mb-2">
                <button class="btn btn-primary rounded-circle" data-toggle="modal" data-target="#modalAddProdi"><i class="fas fa-plus"></i></button>
              </div>
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Prodi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($prodi as $p) : ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $p['nama_prodi'] ?></td>
                      <td>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Data Akan Dihapus?')" href="<?php echo base_url() ?>prodi/delete/<?php echo $p['id_prodi'] ?>">
                          <i class="fas fa-trash"></i>
                        </a>
                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEditProdi" data-nama_prodi="<?= $p['nama_prodi'] ?>" data-id_prodi="<?= $p['id_prodi'] ?>">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                      </td>
                    </tr>
                  <?php $no++;
                  endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- MODAL ADD PROGRAM STUDI -->
<div class="modal fade" id="modalAddProdi" tabindex="-1" role="dialog" aria-labelledby="modalAddProdiTitle" aria-hidden="true">
  <form action="<?= base_url('prodi/add_action') ?>" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAddProdiTitle">Tambah Program Studi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_prodi">Nama Prodi</label>
            <input type="text" name="nama_prodi" id="nama_prodi" class="form-control" required>
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
<div class="modal fade" id="modalEditProdi" tabindex="-1" role="dialog" aria-labelledby="modalAddProdiTitle" aria-hidden="true">
  <form action="<?= base_url('prodi/edit_action') ?>" id="formEditProdi" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAddProdiTitle">Edit Program Studi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_prodi">Nama Prodi</label>
            <input type="text" name="nama_prodi" id="nama_prodi" class="form-control" required>
          </div>
          <input type="hidden" name="id_prodi" id="id_prodi">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </form>
</div>