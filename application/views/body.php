
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a class="brand-link">
        <img src="<?= base_url ('assets/dist/img/AdminLTELogo.png')?>" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Project UKK</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('assets/dist/img/adj.jpg')?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?= base_url('?p=profil_diri')?>" class="d-block">Mael</a>
          </div>
        </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a class="nav-link  <?= ($this->input->get("p") == "dashboard") ? "active" : ""?>  " href="<?= base_url('?p=dashboard')?>">
            <i class="fas fa-grip-horizontal"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?= ($this->input->get("p") == "data_pembayaran") ? "active" : ""?>  "href="<?= base_url('?p=data_pembayaran')?>" >
            <i class="fas fa-money-check-alt"></i>
              <p>
                Data Pembayaran
              </p>
            </a>
          </li>
          <?php if($this->session->userdata('level') == "0") { ?>
          <li class="nav-item">
            <a class="nav-link  <?= ($this->input->get("p") == "data_kelas") ? "active" : ""?>   "href="<?= base_url('?p=data_kelas')?>" >
              <i class="fas fa-server"></i>
              <p>
                Data Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?= ($this->input->get("p") == "data_siswa") ? "active" : ""?>  "href="<?= base_url('?p=data_siswa')?>">
              <i class="fas fa-users"></i>
              <p>
               Data Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?= ($this->input->get("p") == "data_petugas") ? "active" : ""?>  "href="<?= base_url('?p=data_petugas')?>">
            <i class="fas fa-users-cog"></i>
              <p>
                Data Petugas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?= ($this->input->get("p") == "data_spp") ? "active" : ""?>  "href="<?= base_url('?p=data_spp')?>" >
            <i class="fas fa-money-check"></i>
              <p>
                Data SPP
              </p>
            </a>
          </li>
          <?php }?>
          <div class="sidenav-footer mx-3 ">
          <a class="btn bg-gradient-success mt-3 w-100" href="<?= base_url('cas/log/logout') ?>"><i class="fas fa-sign-out"></i> Sign Out</a>
        </div>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <?php
   if($this->input->get('p')){
    if(file_exists(APPPATH."views/".$this->input->get('p').".php")){
     $this->load->view($this->input->get('p'));
   }else{
      $this->load->view('dashboard');
   }
   } else{
    $this->load->view('dashboard');
 
  }
  ?>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script>
    var base_url = "<?= base_url()."index.php/"?>"
</script>
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE -->
<script src="<?= base_url('assets/dist/js/adminlte.js')?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('assets/plugins/chart.js/Chart.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/dist/js/demo.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/vendor/DataTables/datatables.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/select2/dist/js/select2.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/sweetalert/sweetalert.min.js')?>"></script>
<script src="<?= base_url('pages/'.$this->input->get('p')).'.js'?>"></script>
</body>
</html>

