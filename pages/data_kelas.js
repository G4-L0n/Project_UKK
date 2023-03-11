$(function(){
  $("#data_kelas").DataTable({
      ajax:base_url+"kelas/data_kelas",
      proccessing: true
  });
});

$("#print_data").click(function(){
  $("#nama_kelas").val("");
  $("#jurusan").val("");
  $("#id_kelas").val("");
})

$("#tambah_data").click(function(){
  $("#nama_kelas").val("");
  $("#jurusan").val("");
  $("#id_kelas").val("");
})

$("#simpan").click(function(){
  var id_kelas     = $("#id_kelas").val();
  var nama_kelas   = $("#nama_kelas").val();
  var jurusan      = $("#jurusan").val();
  var data;

  if(id_kelas.length > 0)
      data = {status:"update", id:id_kelas,nama_kelas:nama_kelas,jurusan:jurusan};
  else
      data = {status:"insert", nama_kelas:nama_kelas,jurusan:jurusan};

  $.ajax({
      url : base_url+"kelas/tambah_kelas",
      method: "post",
      data: data,
      dataType: "json",
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
             $("#nama_kelas").val("");
             $("#jurusan").val("");
             //deklarasi ulang tabel
             $("#data_kelas").DataTable().destroy();
             $("#data_kelas").DataTable({
              ajax:base_url+"kelas/data_kelas",
              proccessing: true
          });
          })
      }
  });
})

function hapus(id){
  $.ajax({
      url : base_url+"kelas/hapus_kelas",
      method: "post",
      data: {id:id},
      dataType: "json",
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
             $("#data_kelas").DataTable().destroy();
             $("#data_kelas").DataTable({
              ajax:base_url+"kelas/data_kelas",
              proccessing: true
          });
          })
      }
  });
}

function ubah(id){
  $.ajax({
      url : base_url+"kelas/detail_kelas",
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
         $("#nama_kelas").val(res.nama_kelas);
         $("#id_kelas").val(res.id_kelas);
         $("#jurusan").val(res.jurusan);
      }
  });
}
