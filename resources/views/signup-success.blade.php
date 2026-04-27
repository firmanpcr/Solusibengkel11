<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
       body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4; /* Warna latar belakang abu-abu terang */
}

.navbar-brand {
    font-weight: bold;
    color: #FF6F00; /* Warna oranye untuk kesan kuat dan mencolok */
}

.navbar {
    background-color: #333; /* Warna hitam untuk kesan profesional */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

.hero-section {
    background-color: #FF6F00; /* Oranye mencolok khas industri otomotif */
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
    background-color: #f2f2f2; /* Latar belakang abu-abu terang */
    border: none;
}

.footer {
    margin-top: 50px;
    padding: 20px 0;
    background-color: #333; /* Latar belakang footer hitam */
    text-align: center;
}

.footer p {
    margin: 0;
    font-size: 0.9rem;
    color: #aaa; /* Warna teks abu-abu terang untuk elegansi */
}
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
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
            <h1>Welcome {{$name}}</h1>
            <p class="lead">Berikut info sign up yang dilakukan:</p>
            <a href="#content" class="btn btn-success btn-lg mt-3">{{$email}}</a>
            <a href="#content" class="btn btn-warning btn-lg mt-3">{{$password}}</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 My Laravel App. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
