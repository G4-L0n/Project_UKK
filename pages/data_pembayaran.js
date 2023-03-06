$(function(){
  $("#data_pembayaran").DataTable({
      ajax:base_url+"pembayaran/data_pembayaran",
      proccessing: true
  });   
});

$("#id_petugas").select2({
  theme: "classic",
  allowClear: true,
  placeholder: "Pilih petugas",
  dropdownParent: $('#exampleModal'), 
  ajax: {
      url: base_url+'pembayaran/select_petugas',
      dataType: 'json',
      procesResults: function (data) {
          return {results: data.results};
      }
  }
});

$("#nisn").select2({
  theme: "classic",
  allowClear: true,
  placeholder: "Pilih siswa",
  dropdownParent: $('#exampleModal'), 
  ajax: {
      url: base_url+'pembayaran/select_siswa',
      dataType: 'json',
      procesResults: function (data) {
          return {results: data.results};
      }
  }
});

$("#id_spp").select2({
  theme: "classic",
  allowClear: true,
  placeholder: "Pilih Nominal",
  dropdownParent: $('#exampleModal'), 
  ajax: {
      url: base_url+'pembayaran/select_spp',
      dataType: 'json',
      procesResults: function (data) {
          return {results: data.results};
      }
  }
});

$("#tambah_data").click(function(){

  $("#id_pembayaran").val("");
  $("#id_petugas").val("");
  $("#nisn").val("");
  $("#tgl_bayar").val("");
  $("#bulan_dibayar").val("");
  $("#tahun_dibayar").val("");
  $("#id_spp").val("");
  $("#jumlah_bayar").val("");
})

$("#simpan").click(function(){
  var id_pembayaran   = $("#id_pembayaran").val();
  var id_petugas   = $("#id_petugas").val();
  var nisn       = $("#nisn").val();
  var tgl_bayar        = $("#tgl_bayar").val();
  var bulan_dibayar = $("#bulan_dibayar").val();
  var tahun_dibayar      = $("#tahun_dibayar").val();
  var id_spp        = $("#id_spp").val();
  var jumlah_bayar    = $("#jumlah_bayar").val();
  
  if (id_pembayaran.length > 0)
      data = {status:"update", 
              id_pembayaran:id_pembayaran,
              id_petugas:id_petugas,
              nisn:nisn, 
              tgl_bayar:tgl_bayar,
              bulan_dibayar:bulan_dibayar,
              tahun_dibayar:tahun_dibayar,
              id_spp:id_spp,
              jumlah_bayar:jumlah_bayar}
  else
      data = {status:"insert", 
              id_petugas:id_petugas,
              nisn:nisn, 
              tgl_bayar:tgl_bayar,
              bulan_dibayar:bulan_dibayar,
              tahun_dibayar:tahun_dibayar,
              id_spp:id_spp,
              jumlah_bayar:jumlah_bayar}
  
      $.ajax({
      url : base_url+"pembayaran/tambah_pembayaran",
      method: "post",
      data: data,
      dataType: "json", //javascript object notation
      error: function(){
          Swal.fire({
              icon: 'error',
              title: 'Sistem Bermasalah',
              text: 'Server terdeteksi bermasalah',
          })
      },
      success: function(res){
          Swal.fire({
              icon: res.icon,
              title: res.judul,
              text: res.isi,
          }).then(function(){
              //tutup Modal
             $("#exampleModal").modal("hide");
             //membersihkan isian 
             $("#tgl_bayar").val("");
             $("#bulan_dibayar").val("");
             $("#tahun_dibayar").val("");
             $("#jumlah_bayar").val("");
             $("#id_petugas").val(null).trigger("change");
             $("#nisn").val(null).trigger("change");
             $("#id_spp").val(null).trigger("change");
             //deklarasi ulang tabel
             $("#data_pembayaran").DataTable().destroy();
             $("#data_pembayaran").DataTable({
              ajax:base_url+"pembayaran/data_pembayaran",
              proccessing: true
          });
          })
      }
  });
})

function hapus(id){
  $.ajax({
      url : base_url+"pembayaran/hapus_pembayaran",
      method: "post",
      data: {id:id},
      dataType: "json", //javascript object notation
      error: function(){
          Swal.fire({
              icon: 'error',
              title: 'Sistem Bermasalah',
              text: 'Server terdeteksi bermasalah',
          })
      },
      success: function(res){
          Swal.fire({
              icon: res.icon,
              title: res.judul,
              text: res.isi,
          }).then(function(){
             //deklarasi ulang tabel
             $("#data_pembayaran").DataTable().destroy();
             $("#data_pembayaran").DataTable({
              ajax:base_url+"pembayaran/data_pembayaran",
              proccessing: true
          });
          })
      }
  });
}

function ubah(id){
  $.ajax({
      url : base_url+"pembayaran/detail_pembayaran",
      method: "post",
      data: {id:id},
      dataType: "json", //javascript object notation
      error: function(){
          Swal.fire({
              icon: 'error',
              title: 'Sistem Bermasalah',
              text: 'Server terdeteksi bermasalah',
          })
      },
      success: function(res){
         $("#exampleModal").modal("show");
         $("#id_petugas").val(res.id_petugas);
         $("#id_petugas").trigger("change");
         $("#nisn").val(res.nisn);
         $("#nisn").trigger("change");
         $("#id_pembayaran").val(res.id_pembayaran);
         $("#tgl_bayar").val(res.tgl_bayar);
         $("#bulan_dibayar").val(res.bulan_dibayar);
         $("#tahun_dibayar").val(res.tahun_dibayar);
         $("#jumlah_bayar").val(res.jumlah_bayar);
         $("#id_spp").val(res.id_spp);
         $("#id_spp").trigger("change");
      }
  });
}