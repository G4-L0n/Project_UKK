<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">Overview</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
              <p class="text-primary text-xl">
                <i class="fas fa-users"></i>
              </p>
              <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                  <?= $count_siswa ?>
                </span>
                <a href="<?= base_url('?p=data_siswa')?>"><span class="text-muted">SISWA</span></a>
              </p>
            </div>
            <!-- /.d-flex -->
            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
              <p class="text-primary text-xl">
                <i class="fas fa-server"></i>
              </p>
              <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                <?= $count_kelas ?>
                </span>
                <a href="<?= base_url('?p=data_kelas')?>"><span class="text-muted">KELAS</span></a>
              </p>
            </div>
            <!-- /.d-flex -->
            <div class="d-flex justify-content-between align-items-center mb-0">
              <p class="text-primary text-xl">
                <i class="fas fa-users-cog"></i>
              </p>
              <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                  <?= $count_petugas ?>
                </span>
                <a href="<?= base_url('?p=data_petugas')?>"><span class="text-muted">PETUGAS</span></a>
              </p>
            </div>
            <!-- /.d-flex -->
          </div>
        </div>
        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">History Pembayaran</h3>
          </div>
          <div class="card-body table table-responsive">
            <table id="data_pembayaran" class="table table-striped">
              <thead>
                <tr>
                  <th width="1%">No</th>
                  <th width="1%">Id</th>
                  <th width="20%">Petugas</th>
                  <th width="20%">Nama Siswa</th>
                  <th width="20%">Tanggal dibayar</th>
                  <th width="4%">Bulan dibayar</th>
                  <th width="4%">Tahun dibayar</th>
                  <th width="15%">Nominal</th>
                  <th width="15%">Jumlah Bayar</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->