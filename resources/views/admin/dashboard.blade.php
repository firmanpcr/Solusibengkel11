<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Primary Meta Tags -->
    <title>Selamat datang di Solusibengkel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-dark px-4 col-12 d-lg-none" style="background-color: #800000;">
        <a class="navbar-brand me-lg-5" href="../../index.html">
            <img class="navbar-brand-dark" src="{{ asset('assets-admin/img/brand/light.svg') }}" alt="Volt logo">
            <img class="navbar-brand-light" src="{{ asset('assets-admin/img/brand/dark.svg') }}" alt="Volt logo">
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <style>
        #sidebarMenu {
            background-color: #282b3f;
            /* Warna utama maroon */
            color: #ffffff;
            /* Warna teks putih */
        }

        #sidebarMenu .sidebar-inner {
            padding: 1rem;
        }

        #sidebarMenu .nav-link {
            color: #f8f9fa;
            /* Warna teks putih */
            font-weight: bold;
            border-radius: 8px;
            padding: 0.5rem 1rem;
        }

        #sidebarMenu .nav-link:hover {
            background-color: #841717;
            /* Warna maroon lebih terang saat hover */
            color: #ffffff;
        }

        #sidebarMenu .nav-link.active {
            background-color: #5c1515;
            /* Warna maroon terang untuk item aktif */
            color: #ffffff;
        }

        #sidebarMenu .sidebar-icon svg {
            fill: #ffffff;
            /* Warna ikon putih */
        }

        #sidebarMenu .user-card {
            background-color: #6c0f0f;
            /* Latar belakang user card maroon terang */
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1rem;
        }

        #sidebarMenu .user-card h2 {
            color: #ffffff;
            /* Warna teks pada user card */
        }

        #sidebarMenu .btn-secondary {
            background-color: #5c0101;
            border: none;
            color: #ffffff;
        }

        #sidebarMenu .btn-secondary:hover {
            background-color: #781515;
        }

        .collapse-close a {
            color: #ffffff;
            /* Warna ikon close */
        }
    </style>

    <nav id="sidebarMenu" class="sidebar d-lg-block text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div
                class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi</h2>
                    <a href="../../pages/examples/sign-in.html"
                        class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        Sign Out
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a class="nav-link d-flex flex-column align-items-center">
                    <span class="sidebar-icon">
                        <img src="{{ asset('assets1/images/SolusiBengkel.png') }}" height="200" width="200"
                            alt="Volt Logo">
                    </span>
                </a>
            </li>
            </a>
            </li>
            <li class="nav-item active">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <img src="{{ asset('assets1/images/dashboard.png') }}" height="20" width="20"
                        alt="Volt Logo">
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pelanggan.list') }}" class="nav-link">
                    <img src="{{ asset('assets1/images/group (1).png') }}" height="20" width="20"
                        alt="Volt Logo">
                    <span class="sidebar-text">Pelanggan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.list') }}" class="nav-link">
                    <img src="{{ asset('assets1/images/user (1).png') }}" height="20" width="20"
                        alt="Volt Logo">
                    <span class="sidebar-text">User</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('mekanik.list') }}" class="nav-link">
                    <img src="{{ asset('assets1/images/dashboard.png') }}" height="20" width="20"
                        alt="Volt Logo">
                    <span class="sidebar-text">Mekanik</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('booking.list') }}" class="nav-link">
                    <img src="{{ asset('assets1/images/dashboard.png') }}" height="20" width="20"
                        alt="Volt Logo">
                    <span class="sidebar-text">Booking</span>
                </a>
            </li>

        </ul>
        </div>
    </nav>
    <main class="content">
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">

                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark notification-bell unread dropdown-toggle"
                                    data-unread-notifications="true" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                        </path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                                    <div class="list-group list-group-flush">
                                        <a href="#"
                                            class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/team/profile-picture-1.jpg"
                                                        class="avatar-md rounded">
                                                </div>
                                                <div class="col ps-0 ms-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                                        </div>
                                                        <div class="text-end">
                                                            <small class="text-danger">a few moments ago</small>
                                                        </div>
                                                    </div>
                                                    <p class="font-small mt-1 mb-0">Added you to an event "Project
                                                        stand-up"
                                                        tomorrow at 12:30 AM.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/team/profile-picture-2.jpg"
                                                        class="avatar-md rounded">
                                                </div>
                                                <div class="col ps-0 ms-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                                        </div>
                                                        <div class="text-end">
                                                            <small class="text-danger">2 hrs ago</small>
                                                        </div>
                                                    </div>
                                                    <p class="font-small mt-1 mb-0">You've been assigned a task for
                                                        "Awesome
                                                        new project".</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                            <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                <path fill-rule="evenodd"
                                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            View all
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown ms-lg-3">
                                <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="media d-flex align-items-center">
                                        <img src="{{ asset('assets1/images/poto.png') }}"
                                            class="card-img-top rounded-circle border-white" alt=""
                                            style="width: 50px; height: 50px;">
                                        <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                            <span
                                                class="mb-0 font-small fw-bold text-gray-900">{{ Auth::user()->name }}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        My Profile
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Settings
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Messages
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Support
                                    </a>
                                    <div role="separator" class="dropdown-divider my-1"></div>
                                    <a class="dropdown-item d-flex align-items-center" href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <svg class="dropdown-icon text-danger me-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                        Logout
                                    </a>
                                    <!-- Form Logout -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>
        </nav>

        <div class="row">
            <!-- Statistik Utama -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow custom-bg-pelanggan">
                        <div class="card-body">
                            <h5 class="card-title">Total Pelanggan</h5>
                            <h2 class="card-text">{{ $totalPelanggan }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow custom-bg-user">
                        <div class="card-body">
                            <h5 class="card-title">Total User</h5>
                            <h2 class="card-text">{{ $totalUser }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card shadow custom-bg-user">
                        <div class="card-body">
                            <h5 class="card-title">Total Mekanik</h5>
                            <h2 class="card-text">{{ $totalMekanik }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow custom-bg-user">
                        <div class="card-body">
                            <h5 class="card-title">Total Booking</h5>
                            <h2 class="card-text">{{ $totalBooking }}</h2>
                        </div>
                    </div>
                </div>
            </div>


        <style>
            .custom-bg-booking {
                background-color: #3498db;
                /* Warna biru untuk Total Booking */
            }

            .custom-bg-pelanggan {
                background-color: #2ecc71;
                /* Warna hijau untuk Total Pelanggan */
            }

            .custom-bg-user {
                background-color: #f39c12;
                /* Warna oranye untuk Total User */
            }

            .custom-bg-mekanik {
                background-color: #f39c12;
                /* Warna oranye untuk Total Mekanik */
            }
        </style>


        <!-- Pelanggan Baru -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Pelanggan yang Baru Mendaftar</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Bergabung</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topPelanggan as $pelanggan)
                                    <tr>
                                        <td>{{ $pelanggan->first_name }}</td>
                                        <td>{{ $pelanggan->created_at->diffForHumans() }}</td>
                                        <td>{{ $pelanggan->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- User Baru -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">User yang Baru Mendaftar</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Bergabung</th>
                                    <th scope="col">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topUser as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->created_at->diffForHumans() }}</td>
                                        <td>{{ $user->role }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Mekanik yang Baru Mendaftar</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Mekanik</th>
                                    <th scope="col">Keahlian</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topMekanik as $mekanik)
                                    <tr>
                                        <td>{{ $mekanik->name }}</td>
                                        <td>{{ $mekanik->keahlian }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>




        <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                    <p class="mb-0 text-center text-lg-start">© 2024-<span class="current-year"></span> <a
                            class="text-primary fw-normal" href="https://themesberg.com"
                            target="_blank">SolusiBengkel</a>
                    </p>
                </div>
                <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
                    <!-- List -->
                    <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                        <!-- Daftar Menu About -->
                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#aboutModal">About</a>
                        </li>

                        <!-- Modal untuk informasi tentang Solusi Bengkel -->
                        <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-start" id="aboutModalLabel">Tentang Solusi Bengkel
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        <h6>Solusi Bengkel: Layanan Terbaik untuk Kendaraan Anda</h6>
                                        <p>Solusi Bengkel adalah bengkel yang menawarkan berbagai layanan perbaikan dan
                                            perawatan kendaraan, baik mobil maupun motor. Kami menyediakan layanan
                                            berkualitas tinggi dengan teknisi berpengalaman dan peralatan modern untuk
                                            memastikan kendaraan Anda dalam kondisi terbaik.</p>
                                        <ul class="list-unstyled">
                                            <li><strong>Pelayanan 24 Jam:</strong> Kami siap melayani Anda kapan saja,
                                                24 jam sehari.</li>
                                            <li><strong>Teknisi Profesional:</strong> Tim teknisi kami ahli dan
                                                berpengalaman di bidangnya.</li>
                                            <li><strong>Peralatan Terbaru:</strong> Kami menggunakan peralatan terbaru
                                                untuk perawatan kendaraan Anda.</li>
                                            <li><strong>Lokasi Strategis:</strong> Kami berada di pusat kota, mudah
                                                dijangkau.</li>
                                        </ul>
                                        <p>Hubungi kami untuk informasi lebih lanjut atau untuk melakukan booking
                                            layanan!</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal">Service</a>
                        </li>

                        <!-- Modal untuk informasi tentang jenis Service -->
                        <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="serviceModalLabel">Jenis Layanan Service</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        <h6>Berikut adalah jenis layanan yang kami tawarkan:</h6>
                                        <ul>
                                            <li><strong>Service Motor:</strong> Layanan perawatan dan perbaikan untuk
                                                motor Anda, mulai dari ganti oli, perbaikan mesin, hingga pengecekan
                                                rutin.</li>
                                            <li><strong>Service Mobil:</strong> Layanan untuk mobil Anda, termasuk
                                                perawatan mesin, ganti oli, perbaikan rem, dan pengecekan sistem
                                                kendaraan.</li>
                                            <li><strong>Perawatan Berkala:</strong> Kami juga menyediakan perawatan
                                                berkala untuk kendaraan Anda guna memastikan kinerja kendaraan tetap
                                                optimal.</li>
                                            <li><strong>Pengecekan Kendaraan:</strong> Layanan pengecekan kendaraan
                                                secara menyeluruh untuk mendeteksi masalah yang mungkin terjadi di
                                                kendaraan Anda.</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>
        </footer>
    </main>

    <!-- Core -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('assets-admin/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
</body>

</html>
