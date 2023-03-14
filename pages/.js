$(function(){
    $("#data_pembayaran").DataTable({
        ajax:base_url+"pembayaran/data_pembayaran",
        proccessing: true,
    });
  });