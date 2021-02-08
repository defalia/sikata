// ADMIN
// TABEL REGISTRASI
$("#modalShowDataKPAdmin").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let bukti_bayar = button.data("bukti_bayar");
  let tanggal_registrasi = button.data("tanggal_registrasi");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#prodi").text(prodi);
  modal.find("#tahun").text(tahun);
  modal.find("#bukti_bayar").text(bukti_bayar);
  modal
    .find("#bukti_bayar")
    .attr("href", "<?= base_url('assets/img/') ?>" + bukti_bayar);
  modal.find("#tanggal_registrasi").text(tanggal_registrasi);
});

$("#modalShowDataTAAdmin").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let bukti_bayar = button.data("bukti_bayar");
  let tanggal_registrasi = button.data("tanggal_registrasi");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#prodi").text(prodi);
  modal.find("#tahun").text(tahun);
  modal.find("#bukti_bayar").text(bukti_bayar);
  modal.find("#tanggal_registrasi").text(tanggal_registrasi);
});
// TABEL KEUANGAN
$("#modalShowDataKeuanganKPAdmin").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let keterangan = button.data("keterangan");
  let tahun = button.data("tahun");
  let bukti_bayar = button.data("bukti_bayar");
  let tanggal_registrasi = button.data("tanggal_registrasi");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#keterangan").text(keterangan);
  modal.find("#tahun").text(tahun);
  modal.find("#bukti_bayar").text(bukti_bayar);
  modal
    .find("#bukti_bayar")
    .attr("href", "<?= base_url('assets/img/') ?>" + bukti_bayar);
  modal.find("#tanggal_registrasi").text(tanggal_registrasi);
});

$("#modalShowDataKeuanganTAAdmin").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let keterangan = button.data("keterangan");
  let tahun = button.data("tahun");
  let bukti_bayar = button.data("bukti_bayar");
  let tanggal_registrasi = button.data("tanggal_registrasi");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#keterangan").text(keterangan);
  modal.find("#tahun").text(tahun);
  modal.find("#bukti_bayar").text(bukti_bayar);
  modal
    .find("#bukti_bayar")
    .attr("href", "<?= base_url('assets/img/') ?>" + bukti_bayar);
  modal.find("#tanggal_registrasi").text(tanggal_registrasi);
});

// TABEL KAPRODI
$("#modalShowDataKaprodiKPAdmin").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let keterangan = button.data("keterangan");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let monitoring = button.data("monitoring");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#keterangan").text(keterangan);
  modal.find("#tahun").text(tahun);
  modal.find("#monitoring").text(monitoring);
  modal
    .find("#monitoring")
    .attr("href", "<?= base_url('assets/img/') ?>" + monitoring);
});

$("#modalShowDataKaprodiTAAdmin").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let keterangan = button.data("keterangan");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let monitoring = button.data("monitoring");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#keterangan").text(keterangan);
  modal.find("#tahun").text(tahun);
  modal.find("#monitoring").text(monitoring);
  modal
    .find("#monitoring")
    .attr("href", "<?= base_url('assets/img/') ?>" + monitoring);
});

// TABEL DEKANAT
$("#modalShowDataDekanatKPAdmin").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let keterangan = button.data("keterangan");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let id_registrasi = button.data("id_registrasi");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal
    .find("#keterangan")
    .text(`${keterangan}\nKP.${id_registrasi}/SK/DEK/FT.AK/IV/2019`);
  modal.find("#tahun").text(tahun);
});

$("#modalShowDataDekanatTAAdmin").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let keterangan = button.data("keterangan");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let id_registrasi = button.data("id_registrasi");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal
    .find("#keterangan")
    .text(`${keterangan}\nTA.${id_registrasi}/SK/DEK/FT.AK/IV/2019`);
  modal.find("#tahun").text(tahun);
});

// AKUN KEUANGAN
$("#modalEditAkunKeuangan").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let username = button.data("username");
  let password = button.data("password");
  let id_keuangan = button.data("id_keuangan");

  let modal = $(this);
  modal.find("#username").val(username);
  modal.find("#password").val(password);
  modal.find("#id_keuangan").val(id_keuangan);
});

// AKUN KAPRODI
$("#modalEditAkunKaprodi").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let username = button.data("username");
  let password = button.data("password");
  let nama_kaprodi = button.data("nama_kaprodi");
  let nama_prodi = button.data("nama_prodi");
  let id_kaprodi = button.data("id_kaprodi");

  let modal = $(this);
  modal.find("#username").val(username);
  modal.find("#password").val(password);
  modal.find("#nama_kaprodi").val(nama_kaprodi);
  modal.find("#nama_prodi").val(nama_prodi);
  modal.find("#id_kaprodi").val(id_kaprodi);
});

// AKUN DEKANAT
$("#modalEditAkunDekanat").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let username = button.data("username");
  let password = button.data("password");
  let id_dekanat = button.data("id_dekanat");

  let modal = $(this);
  modal.find("#username").val(username);
  modal.find("#password").val(password);
  modal.find("#id_dekanat").val(id_dekanat);
});

// DATA PROGRAM STUDI
$("#modalEditProdi").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nama_prodi = button.data("nama_prodi");
  let id_prodi = button.data("id_prodi");

  let modal = $(this);
  modal.find("#nama_prodi").val(nama_prodi);
  modal.find("#id_prodi").val(id_prodi);
});

// DATA DOSEN
$("#modalEditDosen").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nip = button.data("nip");
  let nama_dosen = button.data("nama_dosen");
  let id_prodi = button.data("id_prodi");
  let jabatan_fungsional = button.data("jabatan_fungsional");
  let current_nip = button.data("nip");

  let modal = $(this);
  modal.find("#nip").val(nip);
  modal.find("#nama_dosen").val(nama_dosen);
  modal.find("#id_prodi").val(id_prodi);
  modal.find("#jabatan_fungsional").val(jabatan_fungsional);
  modal.find("#current_nip").val(current_nip);
});
