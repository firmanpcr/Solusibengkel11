<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/SolusiBengkel.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>


<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Jl Mawar 1</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Senin - Minggu : 08.00 Pagi - 17.00 Sore</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="{{ asset('assets1/images/SolusiBengkel.png') }}" height="70" width="70"alt="Volt Logo">
            <h2 class="m-0 text-primary"><i></i>SolusiBengkel</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="https://wa.me/62895342486320" class="nav-item nav-link" target="_blank">Contact</a>
                <a href="{{ route('review.create') }}" class="nav-item nav-link">Ulasan</a>
                <a href="{{ route('about') }}" class="nav-item nav-link active">About</a>


            </div>
            <a href="{{ route('logout') }}" class="btn btn-danger py-4 px-lg-5 d-none d-lg-block"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout<i class="fa fa-sign-out-alt ms-3"></i>
            </a>

            <!-- Form untuk Logout -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets1\images\bengekel.png') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">Solusi Bengkel</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Service Kendaraan
                                        Anda Dengan Produk Berkualitas
                                        <div class="col-lg-5 d-none d-lg-flex animated zoomIn">

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan asset untuk carousel item lainnya -->
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex bg-light py-5 px-4">
                            <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Informasi Bengkel</h5>
                                <p>Berikut informasi tentang bengkel kami</p>
                                <a class="text-secondary border-bottom" href="#" data-bs-toggle="modal"
                                    data-bs-target="#bengkelModal">Tekan Disini</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal untuk menampilkan informasi bengkel -->
                    <div class="modal fade" id="bengkelModal" tabindex="-1" aria-labelledby="bengkelModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="bengkelModalLabel">Informasi Tentang Bengkel Kami</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Kami adalah bengkel yang sudah berpengalaman dalam memberikan pelayanan perbaikan
                                        dan
                                        perawatan kendaraan terbaik. Berikut adalah beberapa informasi tentang bengkel
                                        kami:
                                    </p>
                                    <ul>
                                        <li><strong>Lokasi Strategis:</strong> Bengkel kami terletak di pusat kota,
                                            mudah
                                            dijangkau dari berbagai arah.</li>
                                        <li><strong>Pelayanan 24 Jam:</strong> Kami menyediakan layanan bengkel 24 jam
                                            untuk
                                            kebutuhan mendesak Anda.</li>
                                        <li><strong>Teknisi Berpengalaman:</strong> Tim kami terdiri dari teknisi yang
                                            berpengalaman dan profesional di bidangnya.</li>
                                        <li><strong>Peralatan Modern:</strong> Bengkel kami dilengkapi dengan peralatan
                                            servis modern untuk memastikan perawatan kendaraan yang optimal.</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Mekanik -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex bg-light py-5 px-4">
                            <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Mekanik</h5>
                                <p>Berikut mekanik kami</p>
                                <a class="text-secondary border-bottom" href="#" data-bs-toggle="modal"
                                    data-bs-target="#mekanikModal">Tekan Disini</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal untuk menampilkan daftar mekanik -->
                    <div class="modal fade" id="mekanikModal" tabindex="-1" aria-labelledby="mekanikModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mekanikModalLabel">Daftar Mekanik</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li>Muhammad Sumbul</li>
                                        <li>Khidir Kharawiti</li>
                                        <li>Ahmad Kanabawi</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Barang Berkualitas -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex bg-light py-5 px-4">
                            <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Barang Yang Berkualitas</h5>
                                <p>Berikut barang yang berkualitas</p>
                                <a class="text-secondary border-bottom" href="#" data-bs-toggle="modal"
                                    data-bs-target="#barangModal">Tekan Disini</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal untuk menampilkan informasi barang -->
                    <div class="modal fade" id="barangModal" tabindex="-1" aria-labelledby="barangModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="barangModalLabel">Barang Berkualitas Bengkel Kami</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Kami hanya menggunakan barang berkualitas untuk memastikan kendaraan Anda
                                        mendapatkan
                                        perawatan terbaik.</p>
                                    <ul>
                                        <li><strong>Spare Part Original:</strong> Kami hanya menggunakan spare part
                                            original
                                            untuk semua jenis kendaraan.</li>
                                        <li><strong>Peralatan Modern:</strong> Peralatan servis kami menggunakan
                                            teknologi
                                            terbaru untuk hasil yang optimal.</li>
                                        <li><strong>Barang yang Terjamin Kualitasnya:</strong> Setiap barang yang kami
                                            gunakan sudah melalui uji kualitas yang ketat.</li>
                                    </ul>

                                    <!-- Tambahan Foto Sparepart -->
                                    <div class="row text-center mt-4">
                                        <!-- Barang 1 -->
                                        <div class="col-md-4">
                                            <img src="img/oli-motor.jpg" class="img-fluid rounded mb-2"
                                                alt="Oli Mesin">
                                            <h6>Oli Mesin</h6>
                                            <p>Sisa Stok: 25</p>
                                        </div>
                                        <!-- Barang 2 -->
                                        <div class="col-md-4">
                                            <img src="img/busi-motor.jpg" class="img-fluid rounded mb-2"
                                                alt="Busi Motor">
                                            <h6>Busi Motor</h6>
                                            <p>Sisa Stok: 40</p>
                                        </div>
                                        <!-- Barang 3 -->
                                        <div class="col-md-4">
                                            <img src="img/kampas-rem.jpg" class="img-fluid rounded mb-2"
                                                alt="Kampas Rem">
                                            <h6>Kampas Rem</h6>
                                            <p>Sisa Stok: 18</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Booking Service -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex bg-light py-5 px-4 h-100">
                            <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                            <div class="ps-4 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="mb-3">Daftar Layanan</h5>
                                    <p>Silakan isi form untuk melakukan booking service kendaraan Anda.</p>
                                </div>

                                <!-- Tombol booking -->
                                <button class="btn btn-danger mt-2 align-self-start" data-bs-toggle="modal"
                                    data-bs-target="#bookingModal">
                                    BOOKING SEKARANG
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal untuk form booking -->
                    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="bookingModalLabel">Form Booking Service</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form Booking -->
                                    @if (session('berhasil'))
                                        <div class="alert alert-success text-center">
                                            <strong>Terima kasih!</strong> Booking Anda berhasil.
                                            <p>Detail Booking Anda:</p>
                                            <ul class="list-unstyled">
                                                <li><strong>Nama:</strong> {{ session('name') }}</li>
                                                <li><strong>Email:</strong> {{ session('email') }}</li>
                                                <li><strong>Service:</strong> {{ session('service') }}</li>
                                                <li><strong>Tanggal:</strong> {{ session('date') }}</li>
                                                <li><strong>Permintaan Khusus:</strong> {{ session('request') }}</li>
                                            </ul>
                                        </div>
                                    @else
                                        <form action="{{ route('booking') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label text-danger">Nama</label>
                                                <input type="text" class="form-control border-danger"
                                                    id="name" name="name" placeholder="Masukkan nama Anda"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label text-danger">Email</label>
                                                <input type="email" class="form-control border-danger"
                                                    id="email" name="email" placeholder="Masukkan email Anda"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="service" class="form-label text-danger">Pilih
                                                    Service</label>
                                                <select class="form-select border-danger" id="service"
                                                    name="service" required>
                                                    <option selected>Pilih Service</option>
                                                    <option value="motor">Service Motor</option>
                                                    <option value="mobil">Service Mobil</option>
                                                    <option value="mobil">Perawatan Berkala</option>
                                                    <option value="mobil">Pengecekan</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="date" class="form-label text-danger">Tanggal
                                                    Service</label>
                                                <input type="text"
                                                    class="form-control border-danger datetimepicker-input"
                                                    id="date" name="date" placeholder="Pilih tanggal"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="request" class="form-label text-danger">Permintaan
                                                    Khusus</label>
                                                <textarea class="form-control border-danger" id="request" name="request" placeholder="Tulis permintaan khusus"></textarea>
                                            </div>
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-danger btn-block">Booking
                                                    Sekarang</button>
                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5 justify-content-center">
                    <!-- Column for Location -->
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">LOKASI</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl Umban Sari Atas</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6282349206124</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>SolusiBengkel@gmail.com</p>
                    </div>
                    <!-- Column for Opening Hours and Map -->
                    <div class="col-lg-6 col-md-12">
                        <div class="row g-4">
                            <!-- Opening Hours Section -->
                            <div class="col-lg-6 col-md-6">
                                <h4 class="text-light mb-4">Opening Hours</h4>
                                <h6 class="text-light">Minggu - Senin :</h6>
                                <p class="mb-4">08.00 Pagi - 17.00 Sore</p>
                            </div>
                            <!-- Map Section -->
                            <div class="col-lg-6 col-md-6">
                                <h4 class="text-light mb-4">Peta Bengkel</h4>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.620000000000!2d101.425000000000!3d0.570000000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab67b0000001%3s0x31d5ab67b0000001!2sJl.%20Umban%20Sari%20Atas%2C%20Pekanbaru!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
                                    width="100%" height="225" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Column for Add Review Section -->



        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
        <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
