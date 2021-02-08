// DEKANAT
$("#modalDekanatShowDataKP").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let id_registrasi = button.data("id_registrasi");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#prodi").text(prodi);
  modal.find("#tahun").text(tahun);
  modal.find("#id_registrasi").val(id_registrasi);
});

$("#modalDekanatShowDataTA").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let id_registrasi = button.data("id_registrasi");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#prodi").text(prodi);
  modal.find("#tahun").text(tahun);
  modal.find("#id_registrasi").val(id_registrasi);
});

$("#modalDekanatShowRekapKP").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let id_registrasi = button.data("id_registrasi");
  let keterangan = button.data("keterangan");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#prodi").text(prodi);
  modal.find("#tahun").text(tahun);
  modal.find("#keterangan").text(keterangan);
  modal
    .find("#keterangan")
    .removeClass("badge badge-danger badge-success")
    .addClass("badge badge-success");
  modal.find("#nomor_sk").text(`PKL.${id_registrasi}/SK/DEK/FT.AK/IV/2019`);
});

$("#modalDekanatShowRekapTA").on("show.bs.modal", function(event) {
  let button = $(event.relatedTarget);
  let nim = button.data("nim");
  let nama = button.data("nama");
  let prodi = button.data("prodi");
  let tahun = button.data("tahun");
  let id_registrasi = button.data("id_registrasi");
  let keterangan = button.data("keterangan");

  let modal = $(this);
  modal.find("#nim").text(nim);
  modal.find("#nama").text(nama);
  modal.find("#prodi").text(prodi);
  modal.find("#tahun").text(tahun);
  modal.find("#keterangan").text(keterangan);
  modal
    .find("#keterangan")
    .removeClass("badge badge-danger badge-success")
    .addClass("badge badge-success");
  modal.find("#nomor_sk").text(`PKL.${id_registrasi}/SK/DEK/FT.AK/IV/2019`);
});
