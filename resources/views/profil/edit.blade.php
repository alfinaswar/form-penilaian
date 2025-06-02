@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('profil.update', $sekolah->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title">Edit Informasi Sekolah</h6>
                    <button type="submit" class="btn btn-success btn-sm">Simpan Perubahan</button>
                </div>

                <div class="card-body">
                    <!-- Informasi Dasar -->
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">Nama User <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $sekolah->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-3 col-form-label">Email User <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $sekolah->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama_sekolah" class="col-sm-3 col-form-label">Nama Sekolah <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_sekolah" id="nama_sekolah"
                                class="form-control @error('nama_sekolah') is-invalid @enderror"
                                value="{{ old('nama_sekolah', $sekolah->nama_sekolah) }}" required>
                            @error('nama_sekolah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="npsn" class="col-sm-3 col-form-label">NPSN</label>
                        <div class="col-sm-9">
                            <input type="text" name="npsn" id="npsn"
                                class="form-control @error('npsn') is-invalid @enderror"
                                value="{{ old('npsn', $sekolah->npsn) }}">
                            @error('npsn')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="akreditasi" class="col-sm-3 col-form-label">Akreditasi</label>
                        <div class="col-sm-9">
                            <select name="akreditasi" id="akreditasi"
                                class="form-select @error('akreditasi') is-invalid @enderror">
                                <option value="">Pilih Akreditasi</option>
                                <option value="A" {{ old('akreditasi', $sekolah->akreditasi) == 'A' ? 'selected' : '' }}>A
                                </option>
                                <option value="B" {{ old('akreditasi', $sekolah->akreditasi) == 'B' ? 'selected' : '' }}>B
                                </option>
                                <option value="C" {{ old('akreditasi', $sekolah->akreditasi) == 'C' ? 'selected' : '' }}>C
                                </option>
                                <option value="BLK" {{ old('akreditasi', $sekolah->akreditasi) == 'BLK' ? 'selected' : '' }}>
                                    Belum Terakreditasi</option>
                            </select>
                            @error('akreditasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jenjang" class="col-sm-3 col-form-label">Jenjang</label>
                        <div class="col-sm-9">
                            <select name="jenjang" id="jenjang" class="form-select @error('jenjang') is-invalid @enderror">
                                <option value="">Pilih Jenjang</option>
                                <option value="TK" {{ old('jenjang', $sekolah->jenjang) == 'TK' ? 'selected' : '' }}>TK
                                </option>
                                <option value="SD" {{ old('jenjang', $sekolah->jenjang) == 'SD' ? 'selected' : '' }}>SD
                                </option>
                                <option value="SMP" {{ old('jenjang', $sekolah->jenjang) == 'SMP' ? 'selected' : '' }}>SMP
                                </option>
                                <option value="SMA" {{ old('jenjang', $sekolah->jenjang) == 'SMA' ? 'selected' : '' }}>SMA
                                </option>
                                <option value="SMK" {{ old('jenjang', $sekolah->jenjang) == 'SMK' ? 'selected' : '' }}>SMK
                                </option>
                            </select>
                            @error('jenjang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Data Statistik Sekolah -->
                    <hr class="my-4">
                    <h6 class="mb-3 text-muted">Data Statistik Sekolah</h6>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="total_guru" class="form-label">Total Guru</label>
                            <input type="number" name="total_guru" id="total_guru"
                                class="form-control @error('total_guru') is-invalid @enderror"
                                value="{{ old('total_guru', $sekolah->total_guru) }}" min="0">
                            @error('total_guru')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="total_siswa" class="form-label">Total Siswa</label>
                            <input type="number" name="total_siswa" id="total_siswa"
                                class="form-control @error('total_siswa') is-invalid @enderror"
                                value="{{ old('total_siswa', $sekolah->total_siswa) }}" min="0">
                            @error('total_siswa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="total_kelas" class="form-label">Total Kelas</label>
                            <input type="number" name="total_kelas" id="total_kelas"
                                class="form-control @error('total_kelas') is-invalid @enderror"
                                value="{{ old('total_kelas', $sekolah->total_kelas) }}" min="0">
                            @error('total_kelas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="status_sekolah" class="col-sm-3 col-form-label">Status Sekolah</label>
                        <div class="col-sm-9">
                            <select name="status_sekolah" id="status_sekolah"
                                class="form-control @error('status_sekolah') is-invalid @enderror">
                                <option value="">Pilih Status</option>
                                <option value="Negeri" {{ old('status_sekolah', $sekolah->status_sekolah) == 'Negeri' ? 'selected' : '' }}>Negeri</option>
                                <option value="Swasta" {{ old('status_sekolah', $sekolah->status_sekolah) == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                            </select>
                            @error('status_sekolah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Alamat Lengkap -->
                    <hr class="my-4">
                    <h6 class="mb-3 text-muted">Informasi Alamat</h6>

                    <div class="row mb-3">
                        <label for="alamat_sekolah" class="col-sm-3 col-form-label">Alamat Sekolah</label>
                        <div class="col-sm-9">
                            <textarea name="alamat_sekolah" id="alamat_sekolah"
                                class="form-control @error('alamat_sekolah') is-invalid @enderror"
                                rows="3">{{ old('alamat_sekolah', $sekolah->alamat_sekolah) }}</textarea>
                            @error('alamat_sekolah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <input type="text" name="kecamatan" id="kecamatan"
                                class="form-control @error('kecamatan') is-invalid @enderror"
                                value="{{ old('kecamatan', $sekolah->kecamatan) }}">
                            @error('kecamatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="kota" class="form-label">Kota/Kabupaten</label>
                            <input type="text" name="kota" id="kota"
                                class="form-control @error('kota') is-invalid @enderror"
                                value="{{ old('kota', $sekolah->kota) }}">
                            @error('kota')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <input type="text" name="provinsi" id="provinsi"
                                class="form-control @error('provinsi') is-invalid @enderror"
                                value="{{ old('provinsi', $sekolah->provinsi) }}">
                            @error('provinsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="kode_pos" class="form-label">Kode Pos</label>
                            <input type="text" name="kode_pos" id="kode_pos"
                                class="form-control @error('kode_pos') is-invalid @enderror"
                                value="{{ old('kode_pos', $sekolah->kode_pos) }}" maxlength="5">
                            @error('kode_pos')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Kontak -->
                    <hr class="my-4">
                    <h6 class="mb-3 text-muted">Informasi Kontak</h6>

                    <div class="row mb-3">
                        <label for="telepon_sekolah" class="col-sm-3 col-form-label">Telepon Sekolah</label>
                        <div class="col-sm-9">
                            <input type="text" name="telepon_sekolah" id="telepon_sekolah"
                                class="form-control @error('telepon_sekolah') is-invalid @enderror"
                                value="{{ old('telepon_sekolah', $sekolah->telepon_sekolah) }}">
                            @error('telepon_sekolah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email_sekolah" class="col-sm-3 col-form-label">Email Sekolah</label>
                        <div class="col-sm-9">
                            <input type="email" name="email_sekolah" id="email_sekolah"
                                class="form-control @error('email_sekolah') is-invalid @enderror"
                                value="{{ old('email_sekolah', $sekolah->email_sekolah) }}">
                            @error('email_sekolah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="website_sekolah" class="col-sm-3 col-form-label">Website Sekolah</label>
                        <div class="col-sm-9">
                            <input type="url" name="website_sekolah" id="website_sekolah"
                                class="form-control @error('website_sekolah') is-invalid @enderror"
                                value="{{ old('website_sekolah', $sekolah->website_sekolah) }}"
                                placeholder="https://contoh.com">
                            @error('website_sekolah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Deskripsi dan Logo -->
                    <hr class="my-4">
                    <h6 class="mb-3 text-muted">Informasi Tambahan</h6>

                    <div class="row mb-3">
                        <label for="deskripsi_sekolah" class="col-sm-3 col-form-label">Deskripsi Sekolah</label>
                        <div class="col-sm-9">
                            <textarea name="deskripsi_sekolah" id="deskripsi_sekolah"
                                class="form-control @error('deskripsi_sekolah') is-invalid @enderror"
                                rows="4">{{ old('deskripsi_sekolah', $sekolah->deskripsi_sekolah) }}</textarea>
                            @error('deskripsi_sekolah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="logo" class="col-sm-3 col-form-label">Logo Sekolah</label>
                        <div class="col-sm-9">
                            <input type="file" name="logo" id="logo"
                                class="form-control @error('logo') is-invalid @enderror" accept="image/*">
                            @if($sekolah->logo)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $sekolah->logo) }}" alt="Logo Sekolah" height="60"
                                        class="border rounded">
                                    <small class="text-muted d-block">Logo saat ini</small>
                                </div>
                            @endif
                            @error('logo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection