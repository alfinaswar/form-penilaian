@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Kuesioner</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display table" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th rowspan="2">NO</th>
                                    <th rowspan="2">REGISTER</th>
                                    <th>JENJANG</th>
                                    <th colspan="2">STATUS</th>
                                    <th colspan="2">NILAI</th>
                                </tr>
                                <tr>
                                    <th>SEKOLAH</th>
                                    <th>Q</th>
                                    <th>#K</th>
                                    <th>Q</th>
                                    <th>#K</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $key => $item)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td><a href="{{route('kuisoner.create', $item->id)}}">{{$item->reg_number}}</a>
                                        </td>
                                        <td>{{$item->jenjang}}</td>
                                        <td>{{$item->jenjang}}</td>
                                        <td>{{$item->jenjang}}</td>
                                        <td>{{$item->jenjang}}</td>
                                        <td>{{$item->jenjang}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- DataTables JS (jika belum include di layout) --}}
    @push('scripts')
        <script>
            $(document).ready(function () {
                $('#datatable-progres').DataTable({

                });
            });
        </script>
    @endpush
@endsection
