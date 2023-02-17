$(function(){
    $("#data_siswa").DataTable({
      ajax: base_url+"siswa/data_siswa",
      processing: true
    });
});

$("#simpan").click(function(){
  var nisn              = $("#nisn").val();
  var nis               = $("#nis").val();
  var nama              = $("#nama").val();
  var alamat            = $("#alamat").val();
  var no_telp           = $("#nis").val();

$.ajax({
    url : base_url+"siswa/tambah_siswa",
    method : "post",
    data : {nisn:nisn,nis:nis},
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

            $("exampleModal").modal("hide");

            $("#nisn").val("");
            $("#nis").val("");
            $("#nama").val("");
            $("#alamat").val("");
            $("#no_telp").val("");

            $("#data_siswa").DataTable().destroy();
            $("#data_siswa").DataTable({
              ajax: base_url+"siswa/data_siswa",
              processing: true
            });
          })
    }
  });
}