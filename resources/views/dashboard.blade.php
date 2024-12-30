<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Arsip Buku Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- Logout Button -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- User Info -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="{{ asset('dist/img/gambar.png.jpg') }}" 
               alt="User Image" 
               class="img-circle elevation-2" 
               style="width: 30px; height: 30px; object-fit: cover;">
          <span class="ml-2">{{ Auth::user()->nama }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href=# class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Profil
          </a>
          <a href=# class="dropdown-item">
            <i class="fas fa-cog mr-2"></i> Pengaturan
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Menu Daftar Buku -->
                <li class="nav-item">
                    <a href=# class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Daftar Buku</p>
                    </a>
                </li>
                <!-- Menu Daftar Mahasiswa -->
                <li class="nav-item">
                    <a href="{{ route('daftarmhs') }}" class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Daftar Mahasiswa</p>
                    </a>
                </li>
                <!-- Menu Daftar Peminjaman -->
                <li class="nav-item">
                    <a href="{{ route('daftarpinjam') }}" class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>Daftar Peminjaman</p>
                    </a>
                </li>
                <!-- Menu Report Mahasiswa -->
                <li class="nav-item">
                    <a href="{{ route('reportmahasiswa') }}" class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Report Mahasiswa</p>
                    </a>
                </li>
                <!-- Menu Report Buku -->
                <li class="nav-item">
                    <a href="{{ route('reportbuku') }}" class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Report Buku</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Selamat Datang {{ Auth::user()->nama }}</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Silahkan akses menu berikut</h3>
              </div>
              <div class="card-body">
                Menu
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="#">Perpustakaan Surabaya</a>.</strong> All rights reserved.
  </footer>
</div>

<!-- AdminLTE Scripts -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
