@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Buat Role dan Hak Akses</h4>
                    <a class="btn btn-secondary btn-sm" href="{{ route('roles.index') }}">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Oops!</strong> Terjadi kesalahan pada input Anda.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::open(['route' => 'roles.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Nama Role</label>
                                {!! Form::text('name', null, [
        'placeholder' => 'Masukkan nama role',
        'class' => 'form-control',
        'required'
    ]) !!}
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Hak Akses</label>
                                <div class="row">
                                    @foreach ($permission as $value)
                                                                    <div class="col-md-4 mb-2">
                                                                        <div class="form-check">
                                                                            {!! Form::checkbox('permission[]', $value->id, false, [
                                            'class' => 'form-check-input',
                                            'id' => 'permission-' . $value->id
                                        ]) !!}
                                                                            <label class="form-check-label" for="permission-{{$value->id}}">
                                                                                {{ $value->name }}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection