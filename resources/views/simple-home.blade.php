<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/custom-font.css') }}">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('{{ asset('assets/images/') }}');
            /* Ganti dengan path gambar Anda */
            background-size: cover;
            /* Mengatur gambar agar memenuhi area */
            background-position: center;
            /* Memposisikan gambar di tengah */
            background-repeat: no-repeat;
            /* Menghindari pengulangan gambar */
        }

        .navbar-brand {
            font-weight: bold;
            color: #FF6F00;
            /* Warna oranye untuk kesan kuat dan mencolok */
        }

        .navbar {
            background-color: #333;
            /* Warna hitam untuk kesan profesional */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .hero-section {
            background-color: #FF6F00;
            /* Oranye mencolok khas industri otomotif */
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .card {
            margin-top: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f2f2f2;
            /* Latar belakang abu-abu terang */
            border: none;
        }

        .footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #333;
            /* Latar belakang footer hitam */
            text-align: center;
        }

        .footer p {
            margin: 0;
            font-size: 0.9rem;
            color: #aaa;
            /* Warna teks abu-abu terang untuk elegansi */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">SolusiBengkel Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="BlackOpsOne-Regular">SELAMAT DATANG DI <?php echo $username; ?> </h1>
            <img class="rounded" style="width:15em" src="{{ asset('assets/images/SolusiBengkel.png') }}" alt="Logo">
        </div>
    </section>

    <!-- Content Section -->
    <section id="content" class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                </div>
            </div>
            <div class="card-body">
                <center>
                    <h5 class="BlackOpsOne-Regular">Tentang SolusiBengkel</h5>
                    <p class="PlayfairDisplay-Italic-VariableFont_wght">Di SolusiBengkel, kami memahami bahwa kendaraan
                        Anda adalah aset penting dalam keseharian Anda. Oleh karena itu, kami hadir dengan layanan
                        bengkel yang berkualitas, terpercaya, dan profesional. Dengan pengalaman bertahun-tahun di
                        industri otomotif, kami siap memberikan solusi yang tepat untuk segala kebutuhan perawatan dan
                        perbaikan kendaraan Anda.</p>
                    <ul>
                </center>
                <br>


                <br>
                <center>
                    <section class="features">
                        <div class="PlayfairDisplay-Italic-VariableFont_wght">
                            <h2>Pelayanan</h2>
                            <div class="BlackOpsOne-Regular">
                                <br>
                                <br>
                                <br>
                                <h3>Service</h3>
                                <img class="mt-5" style="width:15em" src="{{ asset('assets/images/service.jpeg') }}"
                                    alt="Service">
                            </div>
                            <br>
                            <div class="BlackOpsOne-Regular">
                                <h3>Shop</h3>
                                <img class="mt-5" style="width:15em" src="{{ asset('assets/images/shop.png') }}"
                                    alt="Shop">
                            </div>
                            <br>
                            <div class="BlackOpsOne-Regular">
                                <h3>Customer Service</h3>
                                <img class="mt-5" style="width:15em" src="{{ asset('assets/images/cs.jpeg') }}"
                                    alt="Customer Service">
                            </div>
                        </div>
                    </section>
                    </main>
    </section>
    </center>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Workshop activity. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
