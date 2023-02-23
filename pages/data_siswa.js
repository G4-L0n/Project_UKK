$(function(){
    $("#data_siswa").DataTable({
      ajax: base_url+"siswa/data_siswa",
      processing: true
    });
});

$("#kelas").select({
  theme: "classic",
  allowClear: true,
  placeholder: "Pilih Kelas",
  dropdownParent: $('exampleModal'),
  ajax:{
    url: base_url+'siswa/select_kelas',
    dataType: 'json',
    procesResult: function (data) {
      return {result: data.result};
    }
  }
});

$("#spp").select({
  theme: "classic",
  allowClear: true,
  placeholder: "Pilih SPP",
  dropdownParent: $('exampleModal'),
  ajax:{
    url: base_url+'siswa/select_spp',
    dataType: 'json',
    procesResult: function (data) {
      return {result: data.result};
    }
  }
});

$("#simpan").click(function(){
  var nisn              = $("#nisn").val();
  var nis               = $("#nis").val();
  var nama              = $("#nama").val();
  var kelas             = $("#kelas").val();
  var alamat            = $("#alamat").val();
  var no_telp           = $("#nis").val();
  var spp               = $("#spp").val();

$.ajax({
    url : base_url+"siswa/tambah_siswa",
    method : "post",
    data : {nisn:nisn,nis:nis,nama:nama,id_kelas:kelas,alamat:alamat,no_telp:no_telp,id_spp:spp},
    dataType : "json",
    error : function(){
        Swal.fire({
            icon: 'error',
            title: 'Sistem Bermasalah',
            text: 'server ngajak masalah',
          })
    },
    success : function(res){
        Swal.fire({
            icon: res.icon,
            title: res.judul,
            text: res.isi,
          }).then(function(){

            $("exampleModal").modal("hide");

            $("#nisn").val("");
            $("#nis").val("");
            $("#nama").val("");            
            $("#alamat").val("");
            $("#no_telp").val("");
            $("#spp").val(null).trigger("change");
            $("#kelas").val(null).trigger("change");

            $("#data_siswa").DataTable().destroy();
            $("#data_siswa").DataTable({
              ajax: base_url+"siswa/data_siswa",
              processing: true
            });
          })
    }
  });
})
function hapus (id){
  $.ajax({
    url : base_url+"siswa/hapus_siswa",
    method : "post",
    data : {id:id},
    dataType : "json",
    error : function(){
        Swal.fire({
            icon: 'error',
            title: 'Sistem Bermasalah',
            text: 'server ngajak masalah',
          })
    },
    success : function(res){
        Swal.fire({
            icon: res.icon,
            title: res.judul,
            text: res.isi,
          }).then(function(){
            $("#data_siswa").DataTable().destroy();
            $("#data_siswa").DataTable({
              ajax: base_url+"siswa/data_siswa",
              processing: true
            });
          })
    }
  });
}