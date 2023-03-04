$(function(){
    $("#data_siswa").DataTable({
        ajax:base_url+"siswa/data_siswa",
        proccessing: true
    });   
});

$("#kelas").select({
    theme: "classic",
    allowClear: true,
    placeholder: "Pilih Kelas",
    dropdownParent: $('#exampleModal'), 
    ajax: {
        url: base_url+'siswa/select_kelas',
        dataType: 'json',
        procesResults: function (data) {
            return {results: data.results};
        }
    }

});

$("#spp").select({
    theme: "classic",
    allowClear: true,
    placeholder: "Pilih Nominal",
    dropdownParent: $('#exampleModal'), 
    ajax: {
        url: base_url+'siswa/select_spp',
        dataType: 'json',
        procesResults: function (data) {
            return {results: data.results};
        }
    }

});

$("#tambah_data").click(function(){
    $("#id_siswa").val("0");
    $("#nisn").val("");
    $("#nis").val("");
    $("#nama_siswa").val("");
    $("#kelas").val("");
    $("#alamat").val("");
    $("#no_telp").val("");
    $("#spp").val("");
})

$("#simpan").click(function(){
    var id_siswa   = $("#id_siswa").val();
    var nisn       = $("#nisn").val();
    var nis        = $("#nis").val();
    var nama_siswa = $("#nama_siswa").val();
    var kelas      = $("#kelas").val();
    var alamat     = $("#alamat").val();
    var no_telp    = $("#no_telp").val();
    var spp        = $("#spp").val();
    var data;

    if(id_siswa.length > 0)
        data  = {status:"update", id_siswa:id_siswa, nisn:nisn,nis:nis,nama_siswa:nama_siswa,id_kelas:kelas,alamat:alamat,no_telp:no_telp,id_spp:spp};
    else
        data  = {status:"insert", id_siswa:id_siswa, nisn:nisn,nis:nis,nama_siswa:nama_siswa,id_kelas:kelas,alamat:alamat,no_telp:no_telp,id_spp:spp};


    $.ajax({
        url : base_url+"siswa/tambah_siswa",
        method: "post",
        data: data,
        dataType: "json", //javascript object notation
        error: function(){
            Swal.fire({
                icon: 'error',
                title: 'Sistem Bermasalah',
                text: 'Server terdeteksi bermasalah',
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
               $("#nisn").val("");
               $("#nis").val("");
               $("#nama_siswa").val("");
               $("#alamat").val("");
               $("#no_telp").val("");
               $("#kelas").val(null).trigger("change");
               $("#spp").val(null).trigger("change");
               //deklarasi ulang tabel
               $("#data_siswa").DataTable().destroy();
               $("#data_siswa").DataTable({
                ajax:base_url+"siswa/data_siswa",
                proccessing: true
            });
            })
        }
    });
})

function hapus(id){
    $.ajax({
        url : base_url+"siswa/hapus_siswa",
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
            Swal.fire({
                icon: res.icon,
                title: res.judul,
                text: res.isi,
            }).then(function(){
               //deklarasi ulang tabel
               $("#data_siswa").DataTable().destroy();
               $("#data_siswa").DataTable({
                ajax:base_url+"siswa/data_siswa",
                proccessing: true
            });
            })
        }
    });
}

function ubah(nisn){
    $.ajax({
        url : base_url+"siswa/detail_siswa",
        method: "post",
        data: {nisn:nisn},
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
           $("#id_siswa").val(1);
           $("#nisn").val(res.nisn);
           $("#nis").val(res.nis);
           $("#nama_siswa").val(res.nama_siswa);
           $("#alamat").val(res.alamat);
           $("#no_telp").val(res.no_telp);
           $("#kelas").val(res.id_kelas);
           $("#kelas").trigger("change");
           $("#spp").val(res.id_spp);
           $("#spp").trigger("change");
        }
    });
}
