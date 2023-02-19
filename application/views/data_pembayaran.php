<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Halal</h1>
                </div><!-- /.col -->
                    <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Data Pembayaran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Data Pembayaran</h3>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-backdrop="static" data-target="#exampleModal">
                                  <i class="fas fa-plus-circle"></i>&nbsp;Tambah Data
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="data_pembayaran" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Bulan Bayar</th>
                                        <th>Tahun Bayar</th>
                                        <th>Jumlah Bayar</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <?php $a = 1;?>
                                <tbody>
                                    <tr>
                                        <td><?= $a++?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-circle"></i> Tambah Data Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mb-3 row">
          <label for="nisn" class="col-sm-4 col-form-label">Nisn</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nisn">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tgl_dibayar" class="col-sm-4 col-form-label">Tanggal Dibayar</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" id="tgl_dibayar">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bulan_dibayar" class="col-sm-4 col-form-label">Bulan Dibayar</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="bulan_dibayar">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="jumlah_bayar" class="col-sm-4 col-form-label">Jumlah Bayar</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="jumlah_bayar">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="simpan" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>