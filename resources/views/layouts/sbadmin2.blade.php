<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('bebas') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('bebas') }}/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .hover-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .hover-card a {
            text-decoration: none;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Perpustakaan </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('home', []) }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manajemen
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('anggota', []) }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Anggota</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('buku', []) }}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Buku</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('rak', []) }}">
                    <i class="fas fa-fw fa-pallet"></i>
                    <span>Rak</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('kategori', []) }}">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Kategori</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Transaksi
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link" href="{{ url('pinjam', []) }}">
                    <i class="fas fa-fw fa-hand-holding"></i>
                    <span>Peminjaman</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('kembali', []) }}">
                    <i class="fas fa-fw fa-file-import"></i>
                    <span>Pengembalian</span></a>
            </li>

            <div class="sidebar-heading">
                Laporan
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ url('buku/laporan/cetak') }}" target="blank">Laporan
                            Buku</a>
                        <a class="collapse-item" href="{{ url('pinjam/laporan/cetak') }}" target="blank">Laporan
                            Pinjam</a>
                        <a class="collapse-item" href="{{ url('kembali/laporan/cetak') }}">Laporan Pengembalian</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw text-dark"></i>
                                <span class="badge badge-light badge-counter">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow-lg animated--fade-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header text-white bg-gradient-primary">
                                    <i class="fas fa-bell"></i> Notifikasi
                                </h6>
                                <!-- Notifikasi 1 -->
                                <a class="dropdown-item d-flex align-items-center py-3 hover-notification"
                                    href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-gradient-success">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-400">9 Desember 2024</div>
                                        <span class="font-weight-bold text-dark">Laporan bulanan telah diunduh!</span>
                                    </div>
                                </a>
                                <!-- Notifikasi 2 -->
                                <a class="dropdown-item d-flex align-items-center py-3 hover-notification"
                                    href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-gradient-info">
                                            <i class="fas fa-user text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-400">20 Desember 2024</div>
                                        <span class="font-weight-bold text-dark">1 Anggota baru telah terdaftar</span>
                                    </div>
                                </a>
                                <!-- Notifikasi 3 -->
                                <a class="dropdown-item d-flex align-items-center py-3 hover-notification"
                                    href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-gradient-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-400">28 Desember 2024</div>
                                        <span class="font-weight-bold text-dark">Pemberitahuan: Email telah
                                            diganti</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Lihat Semua
                                    Notifikasi</a>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('bebas') }}/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ url('profil') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="href="{{ route('logout') }}
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @if (Session::has('pesan'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('pesan') }}

                        </div>
                    @endif

                    @yield('isinya')
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
                    </div>

                    <!-- Content Row -->
                    <!-- Row 1: Statistik -->
                    <div class="row">
                        <!-- Card Buku -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="/buku" class="text-decoration-none">
                                <div class="card shadow h-100 hover-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="text-xs font-weight-bold text-uppercase text-dark mb-1">
                                                    Buku</div>
                                                <div class="h5 mb-0 font-weight-bold text-dark">1.000</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-book fa-2x text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card Kategori -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="/kategori" class="text-decoration-none">
                                <div class="card shadow h-100 hover-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="text-xs font-weight-bold text-uppercase text-dark mb-1">
                                                    Kategori</div>
                                                <div class="h5 mb-0 font-weight-bold text-dark">20</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-tags fa-2x text-success"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card Stok Buku -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="/rak" class="text-decoration-none">
                                <div class="card shadow h-100 hover-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="text-xs font-weight-bold text-uppercase text-dark mb-1">
                                                    Rak Buku</div>
                                                <div class="h5 mb-0 font-weight-bold text-dark">20</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-pallet fa-2x text-warning"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card Anggota -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="/anggota" class="text-decoration-none">
                                <div class="card shadow h-100 hover-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="text-xs font-weight-bold text-uppercase text-dark mb-1">
                                                    Anggota</div>
                                                <div class="h5 mb-0 font-weight-bold text-dark">5,000</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Row 2: Laporan Harian -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-dark">Grafik Harian</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Grafik Container -->
                                    <div class="row">
                                        <!-- Grafik Peminjaman -->
                                        <div class="col-md-4">
                                            <h6 class="text-center font-weight-bold text-dark">Peminjaman Buku</h6>
                                            <canvas id="chartPeminjaman"></canvas>
                                        </div>

                                        <!-- Grafik Pengunjung -->
                                        <div class="col-md-4">
                                            <h6 class="text-center font-weight-bold text-dark">Pengunjung</h6>
                                            <canvas id="chartPengunjung"></canvas>
                                        </div>

                                        <!-- Grafik Transaksi -->
                                        <div class="col-md-4">
                                            <h6 class="text-center font-weight-bold text-dark">Transaksi</h6>
                                            <canvas id="chartTransaksi"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('bebas') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('bebas') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('bebas') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('bebas') }}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('bebas') }}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('bebas') }}/js/demo/chart-bar-demo.js"></script>
    <script src="{{ asset('bebas') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('bebas') }}/js/demo/chart-pie-demo.js"></script>

    <script>
        // Grafik Peminjaman Buku
        const ctxPeminjaman = document.getElementById('chartPeminjaman').getContext('2d');
        new Chart(ctxPeminjaman, {
            type: 'bar',
            data: {
                labels: ['Fiksi', 'Non-Fiksi', 'Sejarah', 'Ensiklopedia', 'Anak-Anak', 'Lainnya'],
                datasets: [{
                    label: 'Jumlah Peminjaman',
                    data: [120, 90, 75, 50, 30, 20],
                    backgroundColor: ['#007bff', '#28a745', '#17a2b8', '#ffc107', '#dc3545', '#6c757d'],
                }]
            }
        });

        // Grafik Pengunjung
        const ctxPengunjung = document.getElementById('chartPengunjung').getContext('2d');
        new Chart(ctxPengunjung, {
            type: 'line',
            data: {
                labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                datasets: [{
                    label: 'Jumlah Pengunjung',
                    data: [50, 70, 60, 90, 120, 80, 100],
                    borderColor: '#28a745',
                    backgroundColor: 'rgba(40, 167, 69, 0.1)',
                    fill: true,
                }]
            }
        });

        // Grafik Transaksi
        const ctxTransaksi = document.getElementById('chartTransaksi').getContext('2d');
        new Chart(ctxTransaksi, {
            type: 'pie',
            data: {
                labels: ['Pengembalian', 'Peminjaman', 'Anggota Baru'],
                datasets: [{
                    data: [300, 150, 50],
                    backgroundColor: ['#a8c898', '#C99689', '#A2A0BA']
                }]
            }
        });
    </script>
</body>

</html>
