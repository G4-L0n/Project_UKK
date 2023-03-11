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
        <a class="nav-link" data-widget="pushmenu" href="pages/examples/blank.html" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <?php if(htmlentities($current_user->nama_petugas)){?>
            <a href=<?= site_url('auth/logout') ?> class="nav-link">Logout</a>
          <?php }else if(htmlentities($current_user->nama)){?>
            <a href=<?= site_url('auth/logouts') ?> class="nav-link">Logouts</a>
          <?php }?>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="pages/examples/blank.html">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="pages/examples/blank.html" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= base_url('assets/dist/img/adk.jpg')?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Muhammad Sumbul
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Miow</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 Minute Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="pages/examples/blank.html" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= base_url('assets/dist/img/ade.jpg')?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Rafi
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Farhan Kebab</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 12 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="pages/examples/blank.html" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= base_url('assets/dist/img/adb.jpg')?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Dwi Artanto
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Solat</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 Years Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="pages/examples/blank.html" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="pages/examples/blank.html">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="pages/examples/blank.html" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="pages/examples/blank.html" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="pages/examples/blank.html" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="pages/examples/blank.html" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="pages/examples/blank.html" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="<?= base_url('assets/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <a href=<?= base_url('?p=profil_diri')?>><img src="<?= base_url('assets/dist/img/adj.jpg')?>" class="img-circle elevation-2" alt="User Image"></a>
        </div>
        <div class="info">
          <?php if(htmlentities($current_user->nama_petugas)){?>
          <a href=<?= base_url('?p=profil_diri')?>>
            <b class="d-block text-light"><?= htmlentities($current_user->nama_petugas) ?></b>
				    <small class="d-block text-light"><?= htmlentities($current_user->username) ?></small>
          </a>
          <?php }else if(htmlentities($current_user->nama)){?>
          <a href=<?= base_url('?p=profil_diri')?>>
            <b class="d-block text-light"><?= htmlentities($current_user->nama) ?></b>
				    <small class="d-block text-light"><?= htmlentities($current_user->nisn) ?></small>
          </a>
          <?php }?>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="./" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <!--</li>
          <li class="nav-item">
            <a href="<?= base_url('?p=profil_diri')?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil diri
              </p>
            </a>
          </li>-->
          <li class="nav-item">
            <a href="<?= base_url('?p=data_kelas')?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('?p=data_siswa')?>" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Data Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('?p=data_petugas')?>" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Data Petugas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('?p=data_spp')?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data SPP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('?p=data_pembayaran')?>" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Data Pembayaran
              </p>
            </a>
          </li>
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
      }else{
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
    <strong>Copyright &copy; 2014-2021 <a href="pages/examples/blank.html">AdminLTE.io</a>.</strong>
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
  var base_url = "<?= base_url()."index.php/" ?>";
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
<script src="<?= base_url('assets/dist/js/pages/dashboard3.js')?>"></script>
<script src="<?= base_url('assets/vendor/DataTables/dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/select2/dist/js/select2.full.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/sweetalert/sweetalert.min.js')?>"></script>
<script src="<?= base_url('pages/'.$this->input->get('p')).'.js'?>"></script>
</body>
</html>