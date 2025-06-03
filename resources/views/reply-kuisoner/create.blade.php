@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Jawaban Kuesioner</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Terjadi Kesalahan:</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('isi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="mb-3 col-md-6">
                        <label for="kuisoner_id" class="form-label">Nama Kuesioner</label>
                        <input type="text" name="kuisoner_id" class="form-control" id="kuisoner_id"
                            placeholder="Kuisoner ID" readonly value="{{ $kuisoner->nama_kuisoner }}">
                        <input type="text" name="kuisoner_id" class="form-control" id="kuisoner_id"
                            placeholder="Kuisoner ID" readonly value="{{ $kuisoner->nama_kuisoner }}">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="responden_id" class="form-label">Responden</label>
                        <input type="text" class="form-control" id="responden_id" placeholder="Responden ID" readonly
                            value="{{ auth()->user()->name }}" readonly>
                        <input type="text" name="responden_id" class="form-control" id="responden_id"
                            placeholder="Responden ID" readonly value="{{ auth()->user()->id }}" hidden>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="file_kuisoner" class="form-label">File Kuesioner</label>
                        <input type="file" name="file_kuisoner" class="form-control" id="file_kuisoner">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="bukti_dukung" class="form-label">Bukti Dukung</label>
                        <input type="file" name="bukti_dukung" class="form-control" id="bukti_dukung">
                    </div>

                    <div class="mb-3 col-md-12">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="keterangan" rows="3"
                            placeholder="Keterangan tambahan..."></textarea>
                    </div>

                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('isi.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection