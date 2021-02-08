// KEUANGAN
// TABEL REGISTRASI
$("#modalKeuanganShowDataKP").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let bukti_bayar = button.data("bukti_bayar");
  let tanggal_registrasi = button.data("tanggal_registrasi");
  let id_registrasi = button.data("id_registrasi");
  let keterangan = button.data("keterangan");

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
  modal.find("#keterangan").text(keterangan);
  modal.find("#id_registrasi").val(id_registrasi);
  modal.find("#id_registrasi_batal").val(id_registrasi);
});

$("#modalKeuanganBatalKP").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let id_registrasi = button.data("id_registrasi");

  let modal = $(this);
  modal.find("#id_registrasi").val(id_registrasi);
});

$("#modalKeuanganShowDataTA").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let bukti_bayar = button.data("bukti_bayar");
  let tanggal_registrasi = button.data("tanggal_registrasi");
  let id_registrasi = button.data("id_registrasi");

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
  modal.find("#id_registrasi").val(id_registrasi);
  modal.find("#id_registrasi_batal").val(id_registrasi);
});

$("#modalKeuanganBatalTA").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let id_registrasi = button.data("id_registrasi");

  let modal = $(this);
  modal.find("#id_registrasi").val(id_registrasi);
});

$("#modalKeuanganShowRekapKP").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let bukti_bayar = button.data("bukti_bayar");
  let tanggal_registrasi = button.data("tanggal_registrasi");
  let id_registrasi = button.data("id_registrasi");
  let keterangan = button.data("keterangan");

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
  modal.find("#keterangan").text(keterangan);
  modal.find("#id_registrasi").val(id_registrasi);
  modal.find("#id_registrasi_batal").val(id_registrasi);
  switch (keterangan) {
    case "Dibatalkan":
      modal
        .find("#keterangan")
        .removeClass("badge badge-success")
        .addClass("badge badge-danger");
      break;
    default:
      modal
        .find("#keterangan")
        .removeClass("badge badge-danger")
        .addClass("badge badge-success");
      break;
  }
});

$("#modalKeuanganShowRekapTA").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let bukti_bayar = button.data("bukti_bayar");
  let tanggal_registrasi = button.data("tanggal_registrasi");
  let id_registrasi = button.data("id_registrasi");
  let keterangan = button.data("keterangan");

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
  modal.find("#keterangan").text(keterangan);
  modal.find("#id_registrasi").val(id_registrasi);
  modal.find("#id_registrasi_batal").val(id_registrasi);
  switch (keterangan) {
    case "Dibatalkan":
      modal
        .find("#keterangan")
        .removeClass("badge badge-success")
        .addClass("badge badge-danger");
      break;
    default:
      modal
        .find("#keterangan")
        .removeClass("badge badge-danger")
        .addClass("badge badge-success");
      break;
  }
});
