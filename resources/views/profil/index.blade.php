@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card profile-overview">
            <div class="card-body d-flex">
                <div class="clearfix">
                    <div class="d-inline-block position-relative me-sm-4 me-3 mb-3 mb-lg-0">
                        <img src="images/avatar/school-logo.jpg" alt="" class="rounded-4 profile-avatar">
                        <span
                            class="fa fa-circle border border-3 border-white text-success position-absolute bottom-0 end-0 rounded-circle"></span>
                    </div>
                </div>
                <div class="clearfix d-xl-flex flex-grow-1">
                    <div class="clearfix pe-md-5">
                        <h3 class="fw-semibold mb-1">{{ $sekolah->nama_sekolah ?? 'SMA Negeri 1 Jakarta' }} <img src="images/verified-badge.png" alt="Verified"></h3>
                        <ul class="d-flex flex-wrap fs-6 align-items-center">
                            <li class="me-3 d-inline-flex align-items-center"><i class="las la-graduation-cap me-1 fs-18"></i>{{ $sekolah->jenjang ?? 'SMA' }}</li>
                            <li class="me-3 d-inline-flex align-items-center"><i class="las la-map-marker me-1 fs-18"></i>{{ $sekolah->alamat_sekolah ?? 'Jl. Pendidikan No. 123' }}, {{ $sekolah->kota ?? 'Jakarta' }}</li>
                            <li class="me-3 d-inline-flex align-items-center"><i class="las la-envelope me-1 fs-18"></i>{{ $sekolah->email_sekolah ?? 'info@sman1jakarta.sch.id' }}</li>
                        </ul>
                        <div class="d-md-flex d-none flex-wrap">
                            <div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
                                <div
                                    class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="clearfix ms-2">
                                    <h3 class="mb-0 fw-semibold lh-1">{{ $sekolah->total_siswa ?? '0' }}</h3>
                                    <span class="fs-14">Total Siswa</span>
                                </div>
                            </div>
                            <div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
                                <div
                                    class="avatar avatar-md style-1 bg-success-light text-success rounded d-flex align-items-center justify-content-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 14C20.49 12.54 22 10.79 22 8.5C22 7.04131 21.4205 5.64236 20.3891 4.61091C19.3576 3.57946 17.9587 3 16.5 3C15.74 3 15.04 3.16 14.38 3.46L12 5.5L9.62 3.46C8.96 3.16 8.26 3 7.5 3C6.04131 3 4.64236 3.57946 3.61091 4.61091C2.57946 5.64236 2 7.04131 2 8.5C2 10.79 3.51 12.54 5 14L12 21L19 14Z" stroke="var(--bs-success)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="clearfix ms-2">
                                    <h3 class="mb-0 fw-semibold lh-1">{{ $sekolah->total_guru ?? '0' }}</h3>
                                    <span class="fs-14">Guru Aktif</span>
                                </div>
                            </div>
                            <div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
                                <div
                                    class="avatar avatar-md style-1 bg-warning-light text-warning rounded d-flex align-items-center justify-content-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2L3 7L12 12L21 7L12 2Z" stroke="var(--bs-warning)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3 17L12 22L21 17" stroke="var(--bs-warning)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3 12L12 17L21 12" stroke="var(--bs-warning)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="clearfix ms-2">
                                    <h3 class="mb-0 fw-semibold lh-1">{{ $sekolah->total_kelas ?? '0' }}</h3>
                                    <span class="fs-14">Kelas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix mt-3 mt-xl-0 ms-auto d-flex flex-column col-xl-3">
                        <div class="clearfix mb-3 text-xl-end">

                            <a href="javascript:void(0);" class="btn btn-primary ms-2">Hubungi Sekolah</a>
                        </div>
                        <div class="mt-auto d-flex align-items-center">
                            <div class="clearfix me-3">
                                <span class="fw-medium text-black d-block mb-1">Akreditasi</span>
                                <p class="mb-0 d-flex">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.83334 14.1668L14.1667 5.8335" stroke="var(--bs-success)"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M5.83334 5.8335H14.1667V14.1668" stroke="var(--bs-success)"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="text-success me-1 fw-bold">A</span>
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
                        <div class="card-header py-3">
                            <h6 class="card-title">Informasi Sekolah</h6>
                            <a href="{{ route('profil.edit',$sekolah->id) }}" class="btn btn-sm btn-primary">Edit Profil</a>
                        </div>
                        <div class="card-body">
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Nama Sekolah</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $sekolah->nama_sekolah ?? 'SMA Negeri 1 Jakarta' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">NPSN</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $sekolah->npsn ?? '20104001' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Jenjang</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $sekolah->jenjang ?? 'Sekolah Menengah Atas (SMA)' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Status Sekolah</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $sekolah->status_sekolah ?? 'Negeri' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Telepon</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $sekolah->telepon_sekolah ?? '(021) 123-4567' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Email Sekolah</span>
                                </div>
                                <div class="col-7">
                                    <span class="fs-13 fw-semibold">{{ $sekolah->email_sekolah ?? 'info@sman1jakarta.sch.id' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-5">
                                    <span class="fs-13">Website</span>
                                </div>
                                <div class="col-7">
                                    <a href="{{ $sekolah->website_sekolah ?? 'https://sman1jakarta.sch.id' }}" class="fs-13 fw-semibold text-primary" target="_blank">{{ $sekolah->website_sekolah ?? 'sman1jakarta.sch.id' }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header py-3">
                            <h6 class="card-title">Lokasi & Alamat</h6>
                        </div>
                        <div class="card-body">
                            <div class="row py-2">
                                <div class="col-4">
                                    <span class="fs-13">Alamat Lengkap</span>
                                </div>
                                <div class="col-8">
                                    <span class="fs-13 fw-semibold">{{ $sekolah->alamat_sekolah ?? 'Jl. Pendidikan Raya No. 123' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-4">
                                    <span class="fs-13">Kecamatan</span>
                                </div>
                                <div class="col-8">
                                    <span class="fs-13 fw-semibold">{{ $sekolah->kecamatan ?? 'Tanah Abang' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-4">
                                    <span class="fs-13">Kota/Kabupaten</span>
                                </div>
                                <div class="col-8">
                                    <span class="fs-13 fw-semibold">{{ $sekolah->kota ?? 'Jakarta Pusat' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-4">
                                    <span class="fs-13">Provinsi</span>
                                </div>
                                <div class="col-8">
                                    <span class="fs-13 fw-semibold">{{ $sekolah->provinsi ?? 'DKI Jakarta' }}</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-4">
                                    <span class="fs-13">Kode Pos</span>
                                </div>
                                <div class="col-8">
                                    <span class="fs-13 fw-semibold">{{ $sekolah->kode_pos ?? '10230' }}</span>
                                </div>
                            </div>

                            <div class="mt-4">
                                <h6 class="fw-semibold mb-2">Deskripsi Sekolah</h6>
                                <p class="fs-13 text-muted mb-0">
                                    {{ $sekolah->deskripsi_sekolah ?? 'SMA Negeri 1 Jakarta adalah sekolah menengah atas yang berdedikasi untuk memberikan pendidikan berkualitas tinggi. Dengan fasilitas lengkap dan tenaga pengajar yang kompeten, kami berkomitmen untuk mengembangkan potensi siswa secara akademik dan non-akademik.' }}
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
                            <div class="alert alert-success border-success outline-dashed py-3 px-3 d-flex align-items-center">
                                <div class="clearfix">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="#198754"/>
                                        <path d="M9 15L13.5 19.5L21 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="mx-3">
                                    <h6 class="mb-0 fw-semibold text-success">Data Sekolah Terverifikasi!</h6>
                                    <p class="mb-0 fs-13">Data sekolah telah diverifikasi oleh Kemendikbudristek. NPSN aktif dan terdaftar resmi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection