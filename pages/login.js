$("#btn_login").click(function(){
    var username = $("#username").val();
    var password = $("#password").val();    

    $.ajax({
        url: base_url+"cas/log/login",
        data: {username: username, password: password},
        type: "post",
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
                location.reload();
            });
        }

    });
});

$("#btn_login_siswa").click(function(){
    var nisn = $("#nisn").val();   

    $.ajax({
        url: base_url+"cas/log/siswa",
        data: {nisn:nisn},
        type: "post",
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
                location.reload();
            });
        }

    });
});