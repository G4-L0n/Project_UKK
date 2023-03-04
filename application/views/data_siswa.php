 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
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
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                         <i class="fas fa-plus-circle"></i>&nbsp;Tambah Data
                        </button>
                        </div>
                    </div>
                        <div class="card-body">
                            <table id="data_siswa" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>NIS</th>
                                        <th>Nama Lengkap</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>Nomor Telepon</th>
                                        <th>SPP</th>
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
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-circle"></i> Tambah Data Siswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <div class="mb-3 row">
            <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
            <div class="col-sm-8">
              <input type="hidden" autocomplete="off" id="id_siswa">
              <input type="text" class="form-control" id="nisn">
            </div>
           </div>

           <div class="mb-3 row">
            <label for="nis" class="col-sm-4 col-form-label">NIS</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nis">
            </div>
           </div>

           <div class="mb-3 row">
            <label for="nama_siswa" class="col-sm-4 col-form-label">Nama Siswa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama_siswa">
            </div>
            </div>

           <div class="mb-3 row">
            <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
            <div class="col-sm-8">
              <select class="form-control" id="kelas" style="width:100%">
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
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="alamat">
            </div>
            </div>

            <div class="mb-3 row">
            <label for="no_telp" class="col-sm-4 col-form-label">Nomor Telepon</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="no_telp">
            </div>
            </div>

            <div class="mb-3 row">
            <label for="spp" class="col-sm-4 col-form-label">spp</label>
            <div class="col-sm-8">
              <select class="form-control" id="spp" style="width:100%">
              <option></option>
            </div>
            </div>
            <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="" style="display:none">
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
