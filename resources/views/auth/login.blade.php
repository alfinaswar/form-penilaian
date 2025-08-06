<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kuanta</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .h-100 {
            height: 100vh !important;
        }

        .auth-form {
            padding: 20px;
        }

        .dez-separator-outer {
            margin: 15px 0;
        }

        .dez-separator {
            height: 2px;
            width: 50px;
            margin: 0 auto;
        }

        .form-title {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .nav-tabs .nav-link {
            color: #6c757d;
            border: none;
            border-bottom: 2px solid transparent;
            background: none;
            font-weight: 500;
        }

        .nav-tabs .nav-link.active {
            color: #0d6efd;
            border-bottom: 2px solid #0d6efd;
            background: none;
        }

        .nav-tabs .nav-link:hover {
            color: #0d6efd;
            border-bottom: 2px solid #0d6efd;
        }

        .nav-tabs {
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 30px;
        }

        .tab-icon {
            margin-right: 8px;
        }

        .btn-admin {
            background: linear-gradient(45deg, #0d6efd, #0056b3);
            border: none;
        }

        .btn-admin:hover {
            background: linear-gradient(45deg, #0056b3, #004085);
        }

        .btn-penilai {
            background: linear-gradient(45deg, #198754, #146c43);
            border: none;
        }

        .btn-penilai:hover {
            background: linear-gradient(45deg, #146c43, #0f5132);
        }
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-10">
                <div class="row no-gutters bg-white rounded shadow overflow-hidden">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6 p-0">
                        <img src="{{ asset('assets/dokumen/mainlogok.png') }}" alt="Logo"
                            style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>

                    <!-- Kolom Kanan (Login Form) -->
                    <div class="col-md-6 p-4">
                        <div class="auth-form">
                            <!-- Alert Berhasil Daftar -->
                            @if (session('success'))
                                <div class="alert alert-success border border-success alert-outline mb-4" role="alert"
                                    style="border-width:2px;">
                                    <strong>Berhasil!</strong> {{ session('success') }}
                                </div>
                            @endif

                            <!-- Tab Navigation -->
                            <ul class="nav nav-tabs justify-content-center" id="loginTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="admin-tab" data-bs-toggle="tab"
                                        data-bs-target="#admin-login" type="button" role="tab"
                                        aria-controls="admin-login" aria-selected="true">
                                        <i class="fas fa-user-shield tab-icon"></i>Admin
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="sekolah-tab" data-bs-toggle="tab"
                                        data-bs-target="#sekolah-login" type="button" role="tab"
                                        aria-controls="sekolah-login" aria-selected="false">
                                        <i class="fas fa-school tab-icon"></i>Sekolah
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="penilai-tab" data-bs-toggle="tab"
                                        data-bs-target="#penilai-login" type="button" role="tab"
                                        aria-controls="penilai-login" aria-selected="false">
                                        <i class="fas fa-user-graduate tab-icon"></i>Penilai
                                    </button>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content" id="loginTabsContent">
                                <!-- Admin Login Tab -->
                                <div class="tab-pane fade show active" id="admin-login" role="tabpanel"
                                    aria-labelledby="admin-tab">
                                    <form class="dez-form pb-3" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <input type="hidden" name="user_type" value="admin">

                                        <h3 class="form-title text-center">Login Admin</h3>
                                        <div class="dez-separator-outer m-b5">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p class="text-center">Masukkan kredensial administrator Anda.</p>

                                        <div class="form-group mb-3">
                                            <input id="admin_email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Email Admin">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <input id="admin_password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="Password Admin">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="text-center mb-3">
                                            <button class="btn btn-admin text-white btn-block w-100" type="submit">
                                                <i class="fas fa-sign-in-alt me-2"></i>Login sebagai Admin
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Sekolah Login Tab -->
                                <div class="tab-pane fade" id="sekolah-login" role="tabpanel"
                                    aria-labelledby="sekolah-tab">
                                    <form class="dez-form pb-3" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <input type="hidden" name="user_type" value="sekolah">

                                        <h3 class="form-title text-center">Login Sekolah</h3>
                                        <div class="dez-separator-outer m-b5">
                                            <div class="dez-separator bg-warning style-liner"></div>
                                        </div>
                                        <p class="text-center">Masukkan kredensial sekolah Anda.</p>

                                        <div class="form-group mb-3">
                                            <input type="email" name="email" value="{{ old('email') }}" required
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email Sekolah" autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="password" name="password" required
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password Sekolah" autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="text-center mb-3">
                                            <button class="btn btn-warning text-white btn-block w-100" type="submit">
                                                <i class="fas fa-sign-in-alt me-2"></i>Login sebagai Sekolah
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Penilai Login Tab -->
                                <div class="tab-pane fade" id="penilai-login" role="tabpanel"
                                    aria-labelledby="penilai-tab">
                                    <form class="dez-form pb-3" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <input type="hidden" name="user_type" value="admin">

                                        <h3 class="form-title text-center">Login Admin</h3>
                                        <div class="dez-separator-outer m-b5">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p class="text-center">Masukkan kredensial administrator Anda.</p>

                                        <div class="form-group mb-3">
                                            <input id="admin_email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Email Admin">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <input id="admin_password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="Password Admin">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="text-center mb-3">
                                            <button class="btn btn-admin text-white btn-block w-100" type="submit">
                                                <i class="fas fa-sign-in-alt me-2"></i>Login sebagai Penilai
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Registration Links -->
                            <div class="text-center mt-4">
                                <p class="mb-2">Belum punya akun?</p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="{{ route('register') }}" class="text-primary">
                                        <i class="fas fa-user-plus me-1"></i>Daftar Sekolah
                                    </a>
                                    <span class="text-muted">|</span>
                                    <a href="{{ route('users.register-penilai') }}" class="text-success">
                                        <i class="fas fa-user-graduate me-1"></i>Daftar Penilai
                                    </a>
                                </div>
                            </div>

                            <!-- Link Petunjuk Penggunaan Aplikasi -->
                            <div class="text-center mt-4">
                                <a href="{{ asset('assets/dokumen/kuanta_petunjuk.pdf') }}"
                                    class="text-secondary text-decoration-none" target="_blank" download>
                                    <i class="fa fa-download me-1"></i>Download Petunjuk Penggunaan Aplikasi
                                </a>
                            </div>
                        </div>
                    </div> <!-- End col-md-6 -->
                </div> <!-- End row -->
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Handle tab switching dengan smooth transition
        document.querySelectorAll('[data-bs-toggle="tab"]').forEach(tab => {
            tab.addEventListener('shown.bs.tab', function (e) {
                // Clear form fields when switching tabs
                const targetTab = e.target.getAttribute('data-bs-target');
                const otherTab = targetTab === '#admin-login' ? '#penilai-login' : '#admin-login';

                // Reset forms in inactive tab
                document.querySelector(otherTab + ' form').reset();
            });
        });
    </script>
</body>

</html>