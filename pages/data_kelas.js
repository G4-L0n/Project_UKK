$(function(){
    $("#data_kelas").DataTable({
      ajax: base_url+"kelas/data_kelas",
      processing: true
    });
});

$("#simpan").click(function(){
  var nama              = $("#nama").val();
  var jurusan           = $("#jurusan").val();

$.ajax({
    url : base_url+"kelas/tambah_kelas",
    method : "post",
    data : {nama:nama,jurusan:jurusan,jumlah:jumlah},
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

            $("#nama").val("");
            $("#jurusan").val("");

            $("#data_kelas").DataTable().destroy();
            $("#data_kelas").DataTable({
              ajax: base_url+"kelas/data_kelas",
              processing: true
            });
          })
    }
  });
})
function hapus (id){
  $.ajax({
    url : base_url+"kelas/hapus_kelas",
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

            $("#nama").val("");
            $("#jurusan").val("");

            $("#data_kelas").DataTable().destroy();
            $("#data_kelas").DataTable({
              ajax: base_url+"kelas/data_kelas",
              processing: true
            });
          })
    }
  });
}