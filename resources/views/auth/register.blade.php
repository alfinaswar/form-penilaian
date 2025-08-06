<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Sekolah</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="vh-100"
    style="background-image: url('{{ asset('assets/images/bglogin/3040791.webp') }}'); background-size: cover; background-position: center;">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="row no-gutters bg-white rounded shadow overflow-hidden">
                    <!-- Kolom Kiri -->
                    <div
                        class="col-md-4 bg-light d-flex flex-column justify-content-center align-items-center text-center p-4">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" class="mb-3"
                            style="max-width: 150px;">
                        <h4 class="mb-2">KUANTA</h4>
                        <p class="mb-1">Sistem Informasi Adiwiyata</p>
                        <p class="mb-1">Pusat Pengembangan Generasi Lingkungan Hidup</p>
                        <p class="mb-0">Sekretariat / Sekretariat Utama</p>
                    </div>

                    <!-- Kolom Kanan (Form Registrasi) -->
                    <div class="col-md-8 p-4">
                        <div class="auth-form">
                            <form method="POST" action="{{ route('users.register') }}" enctype="multipart/form-data">
                                @csrf
                                <h3 class="form-title text-center">Registrasi Sekolah</h3>
                                <div class="dez-separator-outer m-b5">
                                    <div class="dez-separator bg-primary style-liner"></div>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Nomor Registrasi</label>
                                    <input type="text" name="reg_number" class="form-control"
                                        placeholder="Nomor Registrasi" required>
                                    {{-- <small class="form-text text-muted">Pastikan NPSN telah sesuai</small> --}}
                                </div>

                                <div class="form-group mb-3">
                                    <label>Nama Sekolah</label>
                                    <input type="text" name="nama_sekolah" class="form-control"
                                        placeholder="Nama Sekolah" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Jenjang Sekolah</label>
                                    <select name="jenjang" class="form-control" required>
                                        <option value="">-- Pilih Jenjang --</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="SMK">SMK</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Status Sekolah</label>
                                    <select name="status_sekolah" class="form-control" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="Negeri">Negeri</option>
                                        <option value="Swasta">Swasta</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Jalan / RT-RW</label>
                                    <input type="text" name="alamat_sekolah" class="form-control"
                                        placeholder="Nama jalan / dusun / RT-RW" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Kontak Person</label>
                                    <input type="text" name="cp" class="form-control" placeholder="Nama kontak person"
                                        required>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Telp/WA</label>
                                    <input type="text" name="telepon_sekolah" class="form-control"
                                        placeholder="No Telp/HP kontak person" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email_sekolah" class="form-control"
                                        placeholder="Email aktif" required>
                                    <small class="form-text text-muted">Pastikan email benar dan aktif, akses
                                        aplikasi akan dikirim ke email yang didaftarkan.</small>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required
                                        autocomplete="new-password" placeholder="Masukkan password">
                                    <small class="form-text text-muted">
                                        Password minimal 8 karakter, mengandung huruf besar, huruf kecil, angka, dan
                                        simbol. Gunakan kombinasi yang kuat agar akun Anda lebih aman.
                                    </small>
                                    <div id="password-strength" class="mt-2"></div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Url Isian Kuesioner</label>
                                    <input type="text" name="UrlKuesioner" class="form-control"
                                        placeholder="Link Google Drive" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Url Bukti Dukung</label>
                                    <input type="text" name="UrlBukti" class="form-control"
                                        placeholder="Link Google Drive" required>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="konfirmasi" required>
                                    <label class="form-check-label">
                                        Dengan ini menyatakan bahwa isian registrasi di atas sudah benar.
                                    </label>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                </div>
                            </form>

                            <div class="mt-3 text-center">
                                <a href="{{ route('login') }}">Sudah punya akun? Login di sini</a>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const strengthDiv = document.getElementById('password-strength');

            passwordInput.addEventListener('input', function () {
                const val = passwordInput.value;
                let strength = 0;
                let messages = [];

                if (val.length >= 8) strength++;
                else messages.push('Minimal 8 karakter');

                if (/[A-Z]/.test(val)) strength++;
                else messages.push('Huruf besar');

                if (/[a-z]/.test(val)) strength++;
                else messages.push('Huruf kecil');

                if (/[0-9]/.test(val)) strength++;
                else messages.push('Angka');

                if (/[^A-Za-z0-9]/.test(val)) strength++;
                else messages.push('Simbol');

                let color = '';
                let text = '';
                if (strength === 5) {
                    color = 'text-success';
                    text = 'Password kuat';
                } else if (strength >= 3) {
                    color = 'text-warning';
                    text = 'Password sedang: ' + messages.join(', ');
                } else {
                    color = 'text-danger';
                    text = 'Password lemah: ' + messages.join(', ');
                }

                strengthDiv.innerHTML = `<span class="${color}">${text}</span>`;
            });
        });
    </script>
</body>

</html>
