@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Lihat Jawaban Kuesioner</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="kuisoner_id" class="form-label">Nama Kuesioner</label>
                    <input type="text" name="kuisoner_id" class="form-control" id="kuisoner_id" placeholder="Kuisoner ID"
                        readonly value="{{ $data->nama_kuisoner }}">
                </div>

                <div class="mb-3 col-md-6">
                    <label for="responden_id" class="form-label">Responden</label>
                    <input type="text" class="form-control" id="responden_id" placeholder="Responden ID" readonly
                        value="{{ auth()->user()->name }}" readonly>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="file_kuisoner" class="form-label">File Kuesioner</label>
                    <a href="{{ asset('storage/file_kuisoner/' . $data->file_kuisoner) }}" class="form-control"
                        id="file_kuisoner" target="_blank">Download File</a>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="bukti_dukung" class="form-label">Bukti Dukung</label>
                    <a href="{{ asset('storage/bukti_dukung/' . $data->bukti_dukung) }}" class="form-control"
                        id="bukti_dukung" target="_blank">Download Bukti Dukung</a>
                </div>

                <div class="mb-3 col-md-12">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control" id="keterangan" rows="3" readonly
                        placeholder="Keterangan tambahan...">{{ $data->keterangan }}</textarea>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('isi.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection