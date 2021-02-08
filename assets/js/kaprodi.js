// KAPRODI
$("#modalKaprodiShowDataKP").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let monitoring = button.data("monitoring");
  let judul_pkl = button.data("judul_pkl");
  let id_registrasi = button.data("id_registrasi");
  let keterangan = button.data("keterangan");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#prodi").text(prodi);
  modal.find("#tahun").text(tahun);
  modal.find("#monitoring").text(monitoring);
  modal
    .find("#monitoring")
    .attr("href", "<?= base_url('assets/img/') ?>" + monitoring);
  modal.find("#judul_pkl").text(judul_pkl);
  modal.find("#keterangan").text(keterangan);
  modal.find("#id_registrasi").val(id_registrasi);
  modal.find("#id_registrasi_batal").val(id_registrasi);
});

$("#modalKaprodiBatalKP").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let id_registrasi = button.data("id_registrasi");

  let modal = $(this);
  modal.find("#id_registrasi").val(id_registrasi);
});

$("#modalKaprodiShowDataTA").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let monitoring = button.data("monitoring");
  let judul_ta = button.data("judul_ta");
  let id_registrasi = button.data("id_registrasi");
  let nama_dosbim1 = button.data("nama_dosbim1");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#prodi").text(prodi);
  modal.find("#tahun").text(tahun);
  modal.find("#monitoring").text(monitoring);
  modal
    .find("#monitoring")
    .attr("href", "<?= base_url('assets/img/') ?>" + monitoring);
  modal.find("#judul_ta").text(judul_ta);
  modal.find("#id_registrasi").val(id_registrasi);
  modal.find("#id_registrasi_batal").val(id_registrasi);
  modal.find("#nama_dosbim1").val(nama_dosbim1);
});

$("#modalKaprodiBatalTA").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let id_registrasi = button.data("id_registrasi");

  let modal = $(this);
  modal.find("#id_registrasi").val(id_registrasi);
});

$("#modalKaprodiShowRekapKP").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let tahun = button.data("tahun");
  let monitoring = button.data("monitoring");
  let nama_dosbim = button.data("nama_dosbim");
  let keterangan = button.data("keterangan");
  let id_registrasi = button.data("id_registrasi");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#tahun").text(tahun);
  modal.find("#monitoring").text(monitoring);
  modal
    .find("#monitoring")
    .attr("href", "<?= base_url('assets/img/') ?>" + monitoring);
  modal.find("#nama_dosbim").text(nama_dosbim);
  modal.find("#keterangan").text(keterangan);
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
  if (keterangan == "Telah disetujui oleh Dekan. Surat dapat dicetak") {
    modal
      .find("#nomor_sk")
      .text("PKL." + id_registrasi + "/SK/DEK/FT.AK/IV/2019");
  }
});

$("#modalKaprodiShowRekapTA").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let tahun = button.data("tahun");
  let monitoring = button.data("monitoring");
  let nama_dosbim1 = button.data("nama_dosbim1");
  let nama_dosbim2 = button.data("nama_dosbim2");
  let keterangan = button.data("keterangan");
  let id_registrasi = button.data("id_registrasi");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#tahun").text(tahun);
  modal.find("#monitoring").text(monitoring);
  modal
    .find("#monitoring")
    .attr("href", "<?= base_url('assets/img/') ?>" + monitoring);
  modal.find("#nama_dosbim1").text(nama_dosbim1);
  modal.find("#nama_dosbim2").text(nama_dosbim2);
  modal.find("#keterangan").text(keterangan);
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
  if (keterangan == "Telah disetujui oleh Dekan. Surat dapat dicetak") {
    modal
      .find("#nomor_sk")
      .text("PKL." + id_registrasi + "/SK/DEK/FT.AK/IV/2019");
  }
});

$("#modalKaprodiShowDataJurnal").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let file_jurnal = button.data("file_jurnal");
  let judul = button.data("judul");
  let id_jurnal = button.data("id_jurnal");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#prodi").text(prodi);
  modal.find("#tahun").text(tahun);
  modal.find("#file_jurnal").text(file_jurnal);
  modal
    .find("#file_jurnal")
    .attr("href", "<?= base_url('assets/uploads/jurnal/') ?>" + file_jurnal);
  modal.find("#judul").text(judul);
  modal.find("#id_jurnal").val(id_jurnal);
});

$("#modalKaprodiShowRekapJurnal").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let file_jurnal = button.data("file_jurnal");
  let judul = button.data("judul");
  let status = button.data("status");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#prodi").text(prodi);
  modal.find("#tahun").text(tahun);
  modal.find("#file_jurnal").text(file_jurnal);
  modal
    .find("#file_jurnal")
    .attr("href", "<?= base_url('assets/uploads/jurnal/') ?>" + file_jurnal);
  modal.find("#judul").text(judul);
  modal.find("#status").text(status);
  switch (status) {
    case "Dibatalkan":
      modal
        .find("#status")
        .removeClass("badge badge-success")
        .addClass("badge badge-danger");
      break;
    default:
      modal
        .find("#status")
        .removeClass("badge badge-danger")
        .addClass("badge badge-success");
      break;
  }
});
