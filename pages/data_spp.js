$(function(){
  $("#data_spp").DataTable({
      ajax:base_url+"spp/data_spp",
      proccessing: true
  });
});

$("#tambah_data").click(function(){
  $("#tahun").val("");
  $("#nominal").val("");
  $("#level").val("");
  $("#id_spp").val("");
})

$("#simpan").click(function(){
  var id_spp        = $("#id_spp").val();
  var tahun         = $("#tahun").val();
  var nominal       = $("#nominal").val();
  var data;

  if(id_spp.length > 0)
      data = {status:"update", id:id_spp,tahun:tahun,nominal:nominal};
  else
      data = {status:"insert", tahun:tahun,nominal:nominal};

  $.ajax({
      url : base_url+"spp/tambah_spp",
      method: "post",
      data: data,
      dataType: "json", //javascript object notation
      error: function(){
          Swal.fire({
              icon: 'error',
              title: 'Sistem Bermasalah',
              text: 'Server ngajak masalah',
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
             $("#tahun").val("");
             $("#nominal").val("");
             //deklarasi ulang tabel
             $("#data_spp").DataTable().destroy();
             $("#data_spp").DataTable({
              ajax:base_url+"spp/data_spp",
              proccessing: true
          });
          })
      }
  });
})

function hapus(id){
  $.ajax({
      url : base_url+"spp/hapus_spp",
      method: "post",
      data: {id:id},
      dataType: "json", //javascript object notation
      error: function(){
          Swal.fire({
              icon: 'error',
              title: 'Sistem Bermasalah',
              text: 'Server ngajak masalah',
          })
      },
      success: function(res){
          Swal.fire({
              icon: res.icon,
              title: res.judul,
              text: res.isi,
          }).then(function(){
             //deklarasi ulang tabel
             $("#data_spp").DataTable().destroy();
             $("#data_spp").DataTable({
              ajax:base_url+"spp/data_spp",
              proccessing: true
          });
          })
      }
  });
}

function ubah(id){
  $.ajax({
      url : base_url+"spp/detail_spp",
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
         $("#tahun").val(res.tahun);
         $("#id_spp").val(res.id_spp);
         $("#nominal").val(res.nominal);
      }
  });
}
