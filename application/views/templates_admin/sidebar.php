<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?php echo base_url() ?>assets/img/images2.png">
        <span class="d-none d-lg-block">e-Library</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url('assets/img/profil/') . $admin['Photo']; ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $admin['Username']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $admin['Nama']; ?></h6>
              <span>Administrator</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('admin/dashboard_admin/myprofile'); ?>">
                <i class="bi bi-person"></i>
                <span>Profil Saya</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('auth2/logout'); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar bg-primary">

    <ul class="sidebar-nav" id="sidebar-nav">

      <a class="card-title text-white">
        <span class="text-white">Selamat datang, Administrator!</span>

        <hr class="sidebar-divider bg-light">
        <li class="nav-item">
          <a class="nav-link bg-primary" href="<?php echo base_url('admin/dashboard_admin') ?>">
            <i class="bi bi-grid text-white"></i>
            <span class="text-white">Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <hr class="sidebar-divider bg-light">
        <a class="card-title text-white">
          <span class="text-white">Kategori Data</span>

          <li class="nav-item">
            <a class="nav-link collapsed  bg-primary" href="<?php echo base_url('admin/anggota') ?>">
              <i class="fas fa-users text-light"></i>
              <span class="text-light">Anggota</span>
            </a>
          </li><!-- End Member Page Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed bg-primary" href="<?php echo base_url('admin/buku') ?>">
              <i class="fas fa-book text-white"></i>
              <span class="text-light">Buku</span>
            </a>
          </li><!-- End Book Page Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed bg-primary" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide text-white"></i><span class="text-light">Transaksi</span><i class="bi bi-chevron-down ms-auto text-white"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                <a href="<?php echo base_url('admin/peminjaman') ?>">
                  <i class="bi bi-circle text-white"></i><span class="text-white">Peminjaman Buku</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('admin/pengembalian') ?>">
                  <i class="bi bi-circle text-white"></i><span class="text-white">Pengembalian Buku</span>
                </a>
              </li>
            </ul>
          </li><!-- End Transaksi Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed bg-primary" href="<?php echo base_url('admin/petugas') ?>">
              <i class="fas fa-user-edit text-light"></i>
              <span class="text-light">Petugas</span>
            </a>
          </li><!-- End Petugas Page Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed bg-primary" href="<?= base_url('auth2/logout'); ?>">
              <i class="bi bi-box-arrow-right text-light"></i>
              <span class="text-light">Log Out</span>
            </a>
          </li><!-- End Logout Page Nav -->
  </aside><!-- End Sidebar-->