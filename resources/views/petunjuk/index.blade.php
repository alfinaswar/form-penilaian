@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-8 col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    <h4 class="card-title mb-0">Preview Petunjuk Penggunaan Aplikasi</h4>
                </div>
                <div class="card-body text-center">
                    <p class="mb-4">
                        Silakan lihat petunjuk penggunaan aplikasi di bawah ini untuk memudahkan Anda dalam menggunakan
                        sistem.
                    </p>
                    <div style="height: 800px;">
                        <iframe src="{{ asset('assets/dokumen/kuanta_petunjuk.pdf') }}" width="100%" height="100%"
                            style="border: none;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
