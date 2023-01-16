$(function(){
    $("#data_kelas").DataTable();
})

$("#simpan").click(function(){
  var nama              = $("#nama").val();
  var jurusan           = $("#jurusan").val();
  var jumlah            = $("#jumlah").val();

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
            icon: 'success',
            title: 'Sistem Sukses',
            text: res.hasil,
          })

    }
  });
})