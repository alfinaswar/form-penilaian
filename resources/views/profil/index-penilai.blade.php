@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card profile-overview">
            <div class="card-body d-flex">
                <div class="clearfix">
                    <div class="d-inline-block position-relative me-sm-4 me-3 mb-3 mb-lg-0">
                        <img src="{{ asset('images/avatar/default-avatar.png') }}" alt="" class="rounded-4 profile-avatar">
                        <span
                            class="fa fa-circle border border-3 border-white text-success position-absolute bottom-0 end-0 rounded-circle"></span>
                    </div>
                </div>
                <div class="clearfix d-xl-flex flex-grow-1">
                    <div class="clearfix pe-md-5">
                        <h3 class="fw-semibold mb-1">
                            {{ $penilai->nama ?? '-' }}
                            @if(!empty($penilai->is_verified))
                                <img src="{{ asset('images/verified-badge.png') }}" alt="Verified">
                            @endif
                        </h3>
                        <ul class="d-flex flex-wrap fs-6 align-items-center">
                            <li class="me-3 d-inline-flex align-items-center">
                                <i class="las la-id-badge me-1 fs-18"></i>
                                {{ $penilai->nip ?? '-' }}
                            </li>
                            <li class="me-3 d-inline-flex align-items-center">
                                <i class="las la-envelope me-1 fs-18"></i>
                                {{ $penilai->email ?? '-' }}
                            </li>
                            <li class="me-3 d-inline-flex align-items-center">
                                <i class="las la-phone me-1 fs-18"></i>
                                {{ $penilai->telepon ?? '-' }}
                            </li>
                        </ul>
                        <div class="d-md-flex d-none flex-wrap">
                            <div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
                                <div
                                    class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
                                    <i class="las la-user-tie fs-24"></i>
                                </div>
                                <div class="clearfix ms-2">
                                    <h3 class="mb-0 fw-semibold lh-1">{{ $penilai->jabatan ?? '-' }}</h3>
                                    <span class="fs-14">Jabatan</span>
                                </div>
                            </div>
                            <div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
                                <div
                                    class="avatar avatar-md style-1 bg-success-light text-success rounded d-flex align-items-center justify-content-center">
                                    <i class="las la-building fs-24"></i>
                                </div>
                                <div class="clearfix ms-2">
                                    <h3 class="mb-0 fw-semibold lh-1">{{ $penilai->instansi ?? '-' }}</h3>
                                    <span class="fs-14">Instansi</span>
                                </div>
                            </div>
                            <div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
                                <div
                                    class="avatar avatar-md style-1 bg-warning-light text-warning rounded d-flex align-items-center justify-content-center">
                                    <i class="las la-map-marker fs-24"></i>
                                </div>
                                <div class="clearfix ms-2">
                                    <h3 class="mb-0 fw-semibold lh-1">{{ $penilai->kota ?? '-' }}</h3>
                                    <span class="fs-14">Kota/Kabupaten</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix mt-3 mt-xl-0 ms-auto d-flex flex-column col-xl-3">

                        <div class="mt-auto d-flex align-items-center">
                            <div class="clearfix me-3">
                                <span class="fw-medium text-black d-block mb-1">Status Akun</span>
                                <p class="mb-0 d-flex align-items-center">
                                    @if(!empty($penilai->is_verified))
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.83334 14.1668L14.1667 5.8335" stroke="var(--bs-success)"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5.83334 5.8335H14.1667V14.1668" stroke="var(--bs-success)"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span class="text-success me-1 fw-bold">Terverifikasi</span>
                                    @else
                                        <span class="text-danger me-1 fw-bold">Belum Diverifikasi</span>
                                    @endif
                                </p>
                            </div>
                            <div id="chartProfileProgress"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content" id="tabContentMyProfileBottom">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        {{-- <div class="card-header py-3">
                            <h6 class="card-title">Informasi Penilai</h6>
                            <a href="{{ route('penilai.edit', $penilai->id ?? 0) }}" class="btn btn-sm btn-primary">Edit
                                Profil</a>
                        </div> --}}
                        <div class="card-body">
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Nama Lengkap</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $penilai->nama ?? '-' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">NIP</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $penilai->nip ?? '-' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Jabatan</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $penilai->jabatan ?? '-' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Instansi</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $penilai->instansi ?? '-' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Telepon</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $penilai->telepon ?? '-' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Email</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $penilai->email ?? '-' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Alamat</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $penilai->alamat ?? '-' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header py-3">
                            <h6 class="card-title">Lokasi & Lainnya</h6>
                        </div>
                        <div class="card-body">
                            <div class="row py-2">
                                <div class="col-4">
                                    <span class="fs-13">Kota/Kabupaten</span>
                                </div>
                                <div class="col-8">
                                    <span class="fs-13 fw-semibold">{{ $penilai->kota ?? '-' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-4">
                                    <span class="fs-13">Provinsi</span>
                                </div>
                                <div class="col-8">
                                    <span class="fs-13 fw-semibold">{{ $penilai->provinsi ?? '-' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-4">
                                    <span class="fs-13">Kode Pos</span>
                                </div>
                                <div class="col-8">
                                    <span class="fs-13 fw-semibold">{{ $penilai->kode_pos ?? '-' }}</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h6 class="fw-semibold mb-2">Catatan Penilai</h6>
                                <p class="fs-13 text-muted mb-0">
                                    {{ $penilai->catatan ?? 'Belum ada catatan.' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informasi Tambahan -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header py-3">
                            <h6 class="card-title">Status Verifikasi</h6>
                        </div>
                        <div class="card-body">
                            @if(!empty($penilai->is_verified))
                                <div
                                    class="alert alert-success border-success outline-dashed py-3 px-3 d-flex align-items-center">
                                    <div class="clearfix">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z"
                                                fill="#198754" />
                                            <path d="M9 15L13.5 19.5L21 12" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="mx-3">
                                        <h6 class="mb-0 fw-semibold text-success">Akun Penilai Terverifikasi!</h6>
                                        <p class="mb-0 fs-13">Akun penilai telah diverifikasi oleh admin. Data valid dan aktif.
                                        </p>
                                    </div>
                                </div>
                            @else
                                <div
                                    class="alert alert-warning border-warning outline-dashed py-3 px-3 d-flex align-items-center">
                                    <div class="clearfix">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="15" fill="#ffc107" />
                                            <rect x="13.5" y="8" width="3" height="9" rx="1.5" fill="white" />
                                            <rect x="13.5" y="20" width="3" height="3" rx="1.5" fill="white" />
                                        </svg>
                                    </div>
                                    <div class="mx-3">
                                        <h6 class="mb-0 fw-semibold text-warning">Akun Belum Diverifikasi</h6>
                                        <p class="mb-0 fs-13">Akun penilai belum diverifikasi. Silakan hubungi admin untuk
                                            proses verifikasi.</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
