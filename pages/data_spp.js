$(function(){
    $("#data_spp").DataTable({
      ajax: base_url+"spp/data_spp",
      processing: true
    });
});

$("#simpan").click(function(){
  var tahun           = $("#tahun").val();
  var nominal         = $("#nominal").val();

$.ajax({
    url : base_url+"spp/tambah_spp",
    method : "post",
    data : {tahun:tahun,nominal:nominal},
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

            $("#tahun").val("");
            $("#nominal").val("");

            $("#data_spp").DataTable().destroy();
            $("#data_spp").DataTable({
              ajax: base_url+"spp/data_spp",
              processing: true
            });
          })
    }
  });
})
function hapus (id){
  $.ajax({
    url : base_url+"spp/hapus_spp",
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

            $("#tahun").val("");
            $("#nominal").val("");

            $("#data_spp").DataTable().destroy();
            $("#data_spp").DataTable({
              ajax: base_url+"spp/data_spp",
              processing: true
            });
          })
    }
  });
}