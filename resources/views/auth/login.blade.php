<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- PAGE TITLE HERE -->
    <title>Login Page</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{asset('')}}assets/images/favicon.png">
    <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-10">
                    <div class="row no-gutters bg-white rounded shadow overflow-hidden">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6  d-flex flex-column justify-content-center align-items-center text-center p-4">
                            <img src="{{ asset('assets/images/bglogin/kuantalogo.png') }}" alt="Logo" class="mb-3" style="max-width: 150px;">
                            <h4 class="mb-2">KUANTA</h4>
                            <p class="mb-1">Sistem Informasi Adiwiyata</p>
                            <p class="mb-1">Pusat Pengembangan Generasi Lingkungan Hidup</p>
                            <p class="mb-0">Sekretariat / Sekretariat Utama</p>
                        </div>

                        <!-- Kolom Kanan (Login Form) -->
                        <div class="col-md-6 p-4">
                            <div class="auth-form">
                                <!-- Alert Berhasil Daftar -->
                                @if(session('success'))
                                    <div class="alert alert-success border border-success alert-outline mb-4" role="alert" style="border-width:2px;">
                                        <strong>Berhasil!</strong> {{ session('success') }}
                                    </div>
                                @endif
                                <!-- Login Form -->
                                <form class="dez-form pb-3" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h3 class="form-title text-center">Selamat Datang</h3>
                                    <div class="dez-separator-outer m-b5">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p class="text-center">Masukkan alamat e-mail dan kata sandi Anda.</p>

                                    <div class="form-group mb-3">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password"
                                            placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="text-center mb-3">
                                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                                    </div>
                                </form>

                                <!-- Registration Link -->
                                <div class="text-center">
                                    <p class="mb-2">Belum punya akun?</p>
                                    <a href="{{ route('register') }}" class="text-primary">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div> <!-- End col-md-6 -->
                    </div> <!-- End row -->
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
</body>


</html>
