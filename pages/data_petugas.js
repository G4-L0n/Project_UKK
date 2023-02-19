$(function(){
    $("#data_petugas").DataTable({
      ajax: base_url+"petugas/data_petugas",
      processing: true
    });
});

$("#simpan").click(function(){
  var username          = $("#username").val();
  var password          = $("#password").val();
  var nama_petugas      = $("#nama_petugas").val();
  var level             = $("#level").val();

$.ajax({
    url : base_url+"petugas/tambah_petugas",
    method : "post",
    data : {username:username,password:password,nama_petugas:nama_petugas,level:level},
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

            $("#username").val("");
            $("#password").val("");
            $("#nama_petugas").val("");
            $("#level").val("");

            $("#data_petugas").DataTable().destroy();
            $("#data_petugas").DataTable({
              ajax: base_url+"petugas/data_petugas",
              processing: true
            });
          })
    }
  });
})
function hapus (id){
  $.ajax({
    url : base_url+"petugas/hapus_petugas",
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

            $("#username").val("");
            $("#password").val("");
            $("#nama_petugas").val("");
            $("#level").val("");

            $("#data_petugas").DataTable().destroy();
            $("#data_petugas").DataTable({
              ajax: base_url+"petugas/data_petugas",
              processing: true
            });
          })
    }
  });
}