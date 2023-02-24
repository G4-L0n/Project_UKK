<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Petugas</h1>
                </div><!-- /.col -->
                    <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Data Petugas</li>
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
                                <h3 class="card-title">Data Petugas</h3>
                                <!-- Button trigger modal -->
                                <button id="tambah_data" type="button" class="btn btn-primary" data-toggle="modal" data-backdrop="static" data-target="#exampleModal">
                                  <i class="fas fa-plus-circle"></i>&nbsp;Tambah Data
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="data_petugas" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Nama Petugas</th>
                                        <th>Level</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
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
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-circle"></i> Tambah Data petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mb-3 row">
          <label for="username" class="col-sm-4 col-form-label">Username</label>
          <div class="col-sm-8">
            <input type="hidden" autocomplete="off" id="id_petugas">
            <input type="text" class="form-control" id="username">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="password" class="col-sm-4 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="password">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="nama_petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nama_petugas">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="level" class="col-sm-4 col-form-label">Level</label>
          <div class="col-sm-8">
            <select id="level" class="form-control">
              <option value="admin">Admin</option>
          	  <option value="petugas">Petugas</option>
            </select>
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