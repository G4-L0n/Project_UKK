<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/DataTables/dataTables.min.css')?>">   
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css')?>">
    <title align="center">Data Pembayaran</title>
</head>
<center>
<body>
    <h1>Data Pembayaran</h1>
<script>
$(document).ready( function () {
    $('#tabel-data').DataTable();
} );
</script> 
    <table id="tabel-data" class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Petugas</th>
            <th>Nama Siswa</th>
            <th>Tanggal Bayar</th>
            <th>Bulan dibayar</th>
            <th>tahun dibayar</th>
            <th>Nominal</th>
            <th>Jumlah Bayar</th>
        </tr>
        <?php
        $no = 1;
        foreach ($pembayaran as $bayar):?>
        <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $bayar->nama_petugas ?></td>
                <td><?php echo $bayar->nama ?></td>
                <td><?php echo $bayar->tgl_bayar ?></td>
                <td><?php echo $bayar->bulan_dibayar ?></td>
                <td><?php echo $bayar->tahun_dibayar ?></td>
                <td><?php echo $bayar->nominal ?></td>
                <td><?php echo $bayar->jumlah_bayar ?></td>
        </tr>
        <?php endforeach;?>
    </table>
    <script type="text/javascript">
         window.print();
    </script>
    <!-- Jquery -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- Data Tables -->
    <script src="<?= base_url('assets/vendor/DataTables/datatables.min.js')?>"></script>
</body>
</center>
</html>