$(function(){
    $("#data_kelas").DataTable();
});

$("#simpan").click(function(){
    var kelas       = $("#kelas").val();
    var jurusan     = $("#jurusan").val();
    var jSiswa      = $("#jSiswa").val();

    $.ajax({
        url : base_url+"kelas/tambah_kelas",
        method: "post",
        data: {nama:kelas,jurusan:jurusan,jumlah:jSiswa},
        dataType: "json",
        error: function(){
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Something went wrong',
              })
        },
        succes: function(res){
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: res.ressult,
              })
        },
    });
})