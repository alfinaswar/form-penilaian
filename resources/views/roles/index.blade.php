@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3 text-end">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Buat Role Baru</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <div class="col-xl-12">
        <div class="card dz-card" id="accordion-one">
            <div class="card-header flex-wrap">
                <div>
                    <h4 class="card-title">Data Role Sistem</h4>
                </div>
            </div>
            <!--tab-content-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table id="example" class="display table" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="80%">Nama</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key => $role)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td class="text-center">
                                                <div class="d-flex">
                                                    <a class="btn btn-primary btn-sm me-2"
                                                        href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $roles->render() !!}

@endsection