@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Buat Kuesioner Baru</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('kuisoner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Nama Kuesioner -->
                        <div class="mb-3 col-md-6">
                            <label for="nama_kuisoner" class="form-label">Nama Kuesioner</label>
                            <input type="text" class="form-control" id="nama_kuisoner" name="nama_kuisoner"
                                placeholder="Masukkan nama kuesioner">
                        </div>

                        <!-- File Kuesioner -->
                        <div class="mb-3 col-md-6">
                            <label for="file_kuisoner" class="form-label">File Kuesioner</label>
                            <input type="file" class="form-control" id="file_kuisoner" name="file_kuisoner">
                        </div>

                        <!-- Status -->
                        <div class="mb-3 col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="">-- Pilih Status --</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Nonaktif">Nonaktif</option>
                            </select>
                        </div>

                        <!-- Keterangan -->
                        <div class="mb-3 col-md-12">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"
                                placeholder="Keterangan tambahan..."></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('kuisoner.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection