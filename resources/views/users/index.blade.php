@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3 text-end">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Buat Pengguna Baru</a>
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
                    <h4 class="card-title">Data Pengguna Sistem</h4>

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
                                        <th>No</th>
                                        <th width="50%">Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if(!empty($user->getRoleNames()))
                                                    @foreach($user->getRoleNames() as $v)
                                                        <span class="badge light badge-success">{{ $v }}</span>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex">
                                                    <a class="btn btn-primary btn-sm me-2"
                                                        href="{{ route('users.edit', $user->id) }}">Edit</a>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
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



    {!! $data->render() !!}

@endsection