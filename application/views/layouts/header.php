<!-- Site wrapper -->
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <div class="navbar-header">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </div>

  <!-- Navbar Gambar BNI-->
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-left">
      <div class="image" style="margin-left:auto! Important">
          <img src="<?=template('dist/img/BNI.png')?>" width="156" height="82" alt="User Image">
      </div>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Bagian Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Akhir Bagian Navbar Search-->

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          <!-- <span class="badge badge-danger navbar-badge">7</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- <span class="dropdown-item dropdown-header">Notifications</span> -->
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-unlock-alt mr-2"></i> Reset Password
            <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-power-off mr-2"></i> Log Out
            <!-- <span class="float-right text-muted text-sm">2 days</span> -->
          </a>

      </li>

      <!-- Nav Item User Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" data-toggle="dropdown" href="#">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small" width="48" height="48">
          User
        </span>
        <i class="fas fa-user fa-fw"></i>
        </a> -->

        <!-- Detail User -->
        <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item ajax-link" href="<?php echo site_url('#');?>">
            <i class="fas fa-unlock-alt fa-sm fa-fw mr-2 text-gray-400">
              Reset Password
            </i>
          </a>
          <a class="dropdown-item" href="<?php echo site_url('#');?>">
            <i class="fas fa-power-off fa-sm fa-fw mr-2 text-gray-400">
              Logout
            </i>
          </a>
        </div>
      </li> -->
    </ul>
  </div>
</nav>