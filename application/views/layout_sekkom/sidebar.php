<a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
   
   <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=template('dist/img/user.jpg')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">SEKKOM</a>
          <a href="#" class="d-block">Posisi</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo site_url("sekkom");?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt" aria_hidden="true"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url("sekkom_doccument_proses/read");?>" class="nav-link">
              <i class="nav-icon fa fa-file" aria_hidden="true"></i>
              <p>Dokumen Diproses</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url("sekkom_doccument_selesai/read");?>" class="nav-link">
              <i class="nav-icon fa fa-check-square" aria_hidden="true"></i>
              <p>Dokumen Selesai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url("sekkom_doccument_baru/read");?>" class="nav-link">
              <i class="nav-icon fa fa-envelope" aria_hidden="true"></i>
              <p>Dokumen Baru</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>