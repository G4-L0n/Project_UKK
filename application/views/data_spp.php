<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data SPP</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item active">Data SPP</li>
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
              <h3 class="card-title">Data Spp</h3>
              <a class="btn btn-warning" href="<?php echo base_url('spp/cetak')?>"><i class="fa fa-print"></i> Print</a>
              <!-- Button trigger modal -->
              <button id="tambah_data" type="button" class="btn btn-primary" data-toggle="modal" data-backdrop="static" data-target="#exampleModal">
                <i class="fas fa-plus-circle"></i>&nbsp;Tambah Data
              </button>
            </div>
          </div>
          <div class="card-body">
            <table id="data_spp" class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tahun</th>
                  <th>Nominal</th>
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
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-circle"></i> Tambah Data SPP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="mb-3 row">
          <label for="tahun" class="col-sm-4 col-form-label">Tahun</label>
          <div class="col-sm-8">
          <input type="hidden" autocomplete="off" id="id_spp">
            <input type="text" class="form-control" id="tahun">
          </div>
        </div>
        
        <div class="mb-3 row">
          <label for="nominal" class="col-sm-4 col-form-label">Nominal</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nominal">
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