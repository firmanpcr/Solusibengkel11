<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Solusi Bengkel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e9ecef, #dee2e6);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }

        .login-card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            background-color: #ffffff;
        }

        .card-header {
            background: linear-gradient(135deg, #800000, #b22222);
            /* Gradasi maroon */
            color: white;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            text-align: center;
        }

        .card-body {
            padding: 2rem;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #b22222;
            /* Warna maroon lebih terang */
        }

        .btn-primary {
            border-radius: 8px;
            background: linear-gradient(135deg, #800000, #a52a2a);
            /* Gradasi maroon gelap */
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #a52a2a, #800000);
            /* Gradasi maroon lebih gelap */
        }

        .card-footer {
            background-color: transparent;
            text-align: center;
            padding-bottom: 1rem;
        }

        .small-text {
            color: #800000;
            /* Maroon medium */
        }

        a {
            color: #800000;
            /* Maroon */
            text-decoration: none;
        }

        a:hover {
            color: #a52a2a;
            /* Maroon lebih gelap */
        }
    </style>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card login-card">
                    <div class="card-header">
                        <h3>SELAMAT DATANG</h3>
                        <li class="nav-item list-unstyled">
                            <a class="nav-link d-flex flex-column align-items-center">
                                <span class="sidebar-icon">
                                    <img src="{{ asset('assets\img\LOGO.png') }}" height="150" width="150" alt="Volt Logo">
                                </span>
                            </a>
                        </li>
                        <h3>DI SOLUSI BENGKEL</h3>

                        @if (session('sess_username'))
                            <h5>Halo {{ session('sess_username') }}</h5>
                        @else
                            <p></p>
                        @endif


                        @if (session('asal'))
                            <div class="alert alert-info">
                                Kamu berasal dari {{ session('asal') }}
                            </div>
                        @endif

                        @if (session('berhasil'))
                            <div class="alert alert-success">
                                {{ session('berhasil') }}
                            </div>
                        @elseif(session('gagal'))
                            <div class="alert alert-danger">
                                {{ session('gagal') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (isset($result))
                            @if ($result == 'success')
                                <div class="alert alert-success">
                                    <p>Login Berhasil</p>
                                </div>
                            @elseif ($result == 'error')
                                <div class="alert alert-danger text-center">
                                    <p>Login Gagal</p>
                                </div>
                            @endif
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Masukkan email Anda" required value="{{ old('email') }}">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukkan kata sandi Anda" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                <a href="{{ route('redirect.google') }}" class="btn btn-secondary w-100 mt-3"> Login
                                    with Google </a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p class="small-text">Belum punya akun? <a href="/register">Daftar Sekarang</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
