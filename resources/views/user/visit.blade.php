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
                    <small>Jl Umban Sari Atas</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Senin - Minggu : 09.00 Pagi - 22.00 Malam</small>
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
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/carousel-bg-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">Solusi Bengkel</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Pusat Servis
                                        Reparasi Kendaraan yang Berkualitas</h1>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">PENTING</h1>
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                        Silahkan Login Terlebih Dahulu Agar Bisa Memakai Fitur Booking
                                    </h5>
                                    <a href="/login" class="btn btn-primary">Ke Halaman Booking</a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('assets/img/carousel-1.png') }}"
                                        alt="">
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
                <!-- Informasi Bengkel -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Informasi Bengkel</h5>
                            <p>Berikut informasi tentang bengkel kami</p>
                            <!-- Tombol untuk membuka modal -->
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
                                <p>Kami adalah bengkel yang sudah berpengalaman dalam memberikan pelayanan perbaikan dan
                                    perawatan kendaraan terbaik. Berikut adalah beberapa informasi tentang bengkel kami:
                                </p>
                                <ul>
                                    <li><strong>Lokasi Strategis:</strong> Bengkel kami terletak di pusat kota, mudah
                                        dijangkau dari berbagai arah.</li>
                                    <li><strong>Pelayanan 24 Jam:</strong> Kami menyediakan layanan bengkel 24 jam untuk
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
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
                                <p>Kami hanya menggunakan barang berkualitas untuk memastikan kendaraan Anda mendapatkan
                                    perawatan terbaik.</p>
                                <ul>
                                    <li><strong>Spare Part Original:</strong> Kami hanya menggunakan spare part original
                                        untuk semua jenis kendaraan.</li>
                                    <li><strong>Peralatan Modern:</strong> Peralatan servis kami menggunakan teknologi
                                        terbaru untuk hasil yang optimal.</li>
                                    <li><strong>Barang yang Terjamin Kualitasnya:</strong> Setiap barang yang kami
                                        gunakan sudah melalui uji kualitas yang ketat.</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->


    <!-- Fact Start -->
    <!-- Fact End -->
    <!-- Footer Start -->
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
                            <p class="mb-4">09.00 Pagi - 22.00 Malam</p>
                        </div>
                        <!-- Map Section -->
                        <div class="col-lg-6 col-md-6">
                            <h4 class="text-light mb-4">Peta Bengkel</h4>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!3m2!1sen!2sid!4v1734266867071!5m2!1sen!2sid!6m8!1m7!1srpf_R1ndoRg5ml8WXaMJ0w!2m2!1d0.5704330115354281!2d101.4214432898072!3f218.90638494444897!4f3.182859921107024!5f0.7820865974627469"
                                width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
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
