$(function(){
    $("#data_kelas").DataTable({
      ajax: base_url+"kelas/data_kelas",
      processing: true
    });
});
$("#tambah_data").click(function(){
  $("#id_kelas").val("");
  $("#nama").val("");
  $("#jurusan").val("");
})

$("#simpan").click(function(){
  var id_kelas          = $("#id_kelas").val();
  var nama              = $("#nama").val();
  var jurusan           = $("#jurusan").val();
  var data;

  if(id_kelas.length = 0)
    data = {status:"insert",nama:nama,jurusan:jurusan}
    else
    data = {status:"update",id:id_kelas,nama:nama,jurusan:jurusan}
    
$.ajax({
    url : base_url+"kelas/tambah_kelas",
    method : "post",
    data : {nama:nama,jurusan:jurusan},
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
            $("#data_kelas").DataTable().destroy();
            $("#data_kelas").DataTable({
              ajax: base_url+"kelas/data_kelas",
              processing: true
            });
          })
    }
  });
}
function ubah (id){
  $.ajax({
    url : base_url+"kelas/detail_kelas",
    method : "post",
    data : {id:id},
    dataType : "json",
    error : function(){
        Swal.fire({
            icon: 'error',
            title: 'Sistem Bermasalah',
            text: 'Update ngajak masalah',
          })
    },
    success : function(res){
        $("#exampleModal").modal("show");
        $("#id_kelas").val(res.id_kelas);
        $("#nama").val(res.nama);
        $("#jurusan").val(res.jurusan);
    }
  });
}