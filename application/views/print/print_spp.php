<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/DataTables/dataTables.min.css')?>">   
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css')?>">
    <title align="center">Data spp</title>
</head>
<center>
<body>
    <h1>Data spp</h1>
<script>
$(document).ready( function () {
    $('#tabel-data').DataTable();
} );
</script> 
    <table id="tabel-data" class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Nominal</th>
        </tr>
        <?php
        $no = 1;
        foreach ($spp as $pete):?>
        <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $pete->tahun ?></td>
                <td><?php echo $pete->nominal ?></td>
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