 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pembayaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                        <h3 class="card-title">Data Kelas</h3>
                         <!-- Button trigger modal -->
                         <button id="tambah_data" type="button" class="btn btn-primary" data-toggle="modal" data-backdrop="static" data-target="#exampleModal">
                         <i class="fas fa-plus-circle"></i>&nbsp;Tambah Data
                        </button>
                        </div>
                    </div>
                        <div class="card-body">
                            <table id="data_pembayaran" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id</th>
                                        <th>Petugas</th>
                                        <th>Nama Siswa</th>
                                        <th>Tanggal dibayar</th>
                                        <th>Bulan dibayar</th>
                                        <th>Tahun dibayar</th>
                                        <th>Nominal</th>
                                        <th>Jumlah Bayar</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
       </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-circle"></i> Tambah Data Pembayaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="mb-3 row">
            <label for="id_petugas" class="col-sm-4 col-form-label">Petugas</label>
            <div class="col-sm-8">
              <input type="hidden" autocomplete="off" id="id_pembayaran">
              <select class="form-control" id="id_petugas" style="width:100%">
              <option></option>
            </div>
            </div>
            <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="" style="display:none">
            </div>
            </div>

            <div class="mb-3 row">
            <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
            <div class="col-sm-8">
              <select class="form-control" id="nisn" style="width:100%">
              <option></option>
            </div>
            </div>
            <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="" style="display:none">
            </div>
            </div>

           <div class="mb-3 row">
            <label for="tgl_bayar" class="col-sm-4 col-form-label">Tanggal Bayar</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" id="tgl_bayar">
            </div>
           </div>

           <div class="mb-3 row">
            <label for="bulan_dibayar" class="col-sm-4 col-form-label">Bulan Dibayar</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="bulan_dibayar">
            </div>
            </div>

           <div class="mb-3 row">
            <label for="tahun_dibayar" class="col-sm-4 col-form-label">Tahun Dibayar</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="tahun_dibayar">
            </div>
            </div>

           <div class="mb-3 row">
            <label for="id_spp" class="col-sm-4 col-form-label">SPP</label>
            <div class="col-sm-8">
              <select class="form-control" id="id_spp" style="width:100%">
              <option></option>
            </div>
            </div>
            <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="" style="display:none">
            </div>
            </div>

            <div class="mb-3 row">
            <label for="jumlah_bayar" class="col-sm-4 col-form-label">Jumlah Dibayar</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="jumlah_bayar">
            </div>
            </div>
           <!-- sampai sini -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button id="simpan" type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
