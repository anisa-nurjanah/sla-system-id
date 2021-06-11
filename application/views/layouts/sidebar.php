    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="<?=template('dist/img/user.jpg')?>" class="img-circle elevation-2" alt="User Image"> -->
          <img src="<?=template('dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ADMIN</a>
          <!-- <a href="#" class="d-block">Posisi</a> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo site_url("beranda");?>" class="nav-link">
              <i class="nav-icon fas fa-home" aria_hidden="true"></i>
              <p>Dashboard</p><i class="fas fa-angle-right right"></i>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url("BerandaSekkom");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SEKKOM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url("BerandaSekretaris");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SEKRETARIS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url("BerandaSekretarisBisnis");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SEKRETARIS BISNIS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url("BerandaDGM");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DGM/GM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url("BerandaPimpinan");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PIMPINAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url("BerandaPengelola");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PENGELOLA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url("BerandaAnalyst");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ANALYST</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url("Beranda");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ADMIN</p>
                </a>
              </li>

            </ul>

          </li>
          <li class="nav-item">
            <a href="<?php echo site_url("dokumen");?>" class="nav-link">
                <i class="nav-icon fas fa-file" aria_hidden="true"></i>
                <p>Daftar Dokumen</p><i class="fas fa-angle-right right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url("DokumenDiproses/read");?>" class="nav-link">
                  <i class="nav-icon fa fa-archive"></i>
                  <p>Dokumen Diproses</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url("DokumenSelesai/read");?>" class="nav-link">
                  <i class="nav-icon fa fa-check"></i>
                  <p>Dokumen Selesai</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url("Administrasi/user");?>" class="nav-link">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Admnistrasi
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url("administrasi/doc_baru");?>" class="nav-link">
                  <i class="fa fa-envelope nav-icon"></i>
                  <p>Dokumen Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url("administrasi/doc_selesai");?>" class="nav-link">
                  <i class="fa fa-envelope-open nav-icon"></i>
                  <p>Dokumen Diproses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url("administrasi/user");?>" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Administrasi User</p>
                </a>
              </li>
            </ul> -->
          </li>
        </ul>
      </nav>
    </div>