$(function(){
    $("#data_pembayaran").DataTable({
      ajax: base_url+"pembayaran/data_pembayaran",
      processing: true
    });
});

$("#simpan").click(function(){
  var username          = $("#username").val();
  var password          = $("#password").val();
  var nama_pembayaran   = $("#nama_pembayaran").val();
  var level             = $("#level").val();

$.ajax({
    url : base_url+"pembayaran/tambah_pembayaran",
    method : "post",
    data : {username:username,password:password,nama_pembayaran:nama_pembayaran,level:level},
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
            $("#nama_pembayaran").val("");
            $("#level").val("");

            $("#data_pembayaran").DataTable().destroy();
            $("#data_pembayaran").DataTable({
              ajax: base_url+"pembayaran/data_pembayaran",
              processing: true
            });
          })
    }
  });
})
function hapus (id){
  $.ajax({
    url : base_url+"pembayaran/hapus_pembayaran",
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
            $("#nama_pembayaran").val("");
            $("#level").val("");

            $("#data_pembayaran").DataTable().destroy();
            $("#data_pembayaran").DataTable({
              ajax: base_url+"pembayaran/data_pembayaran",
              processing: true
            });
          })
    }
  });
}