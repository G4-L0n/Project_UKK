$(function(){
  $("#data_petugas").DataTable({
      ajax:base_url+"petugas/data_petugas",
      proccessing: true
  });
});

$("#tambah_data").click(function(){
  $("#username").val("");
  $("#password").val("");
  $("#nama_petugas").val("");
  $("#level").val("");
  $("#id_petugas").val("");
})

$("#simpan").click(function(){
  var id_petugas        = $("#id_petugas").val();
  var username          = $("#username").val();
  var password          = $("#password").val();
  var nama_petugas      = $("#nama_petugas").val();
  var level             = $("#level").val();
  var data;

  if(id_petugas.length > 0)
      data = {status:"update", id:id_petugas,username:username,password:password,nama_petugas:nama_petugas,level:level};
  else
      data = {status:"insert", username:username,password:password,nama_petugas:nama_petugas,level:level};

  $.ajax({
      url : base_url+"petugas/tambah_petugas",
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
             $("#username").val("");
             $("#password").val("");
             $("#nama_petugas").val("");
             $("#level").val("");
             //deklarasi ulang tabel
             $("#data_petugas").DataTable().destroy();
             $("#data_petugas").DataTable({
              ajax:base_url+"petugas/data_petugas",
              proccessing: true
          });
          })
      }
  });
})

function hapus(id){
  $.ajax({
      url : base_url+"petugas/hapus_petugas",
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
             $("#data_petugas").DataTable().destroy();
             $("#data_petugas").DataTable({
              ajax:base_url+"petugas/data_petugas",
              proccessing: true
          });
          })
      }
  });
}

function ubah(id){
  $.ajax({
      url : base_url+"petugas/detail_petugas",
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
         $("#username").val(res.username);
         $("#id_petugas").val(res.id_petugas);
         $("#password").val("");
         $("#nama_petugas").val(res.nama_petugas);
         $("#level").val(res.level);
      }
  });
}
