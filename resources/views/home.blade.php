@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-xxl-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Progres Kuanta</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-progres" class="table table-bordered table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 180px;">No Registrasi</th>
                                    <th style="width: 220px;">Nama Sekolah</th>
                                    <th style="width: 180px;">Progres Kuesioner</th>
                                    <th style="width: 180px;">Progres Bukti Dukung</th>
                                    <th style="width: 150px;">Status</th>
                                    <th style="width: 150px;">Isi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>
                                        <td>
                                            <span class="badge bg-info text-dark fs-6">R2024070001</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/images/bglogin/kuantalogo.png') }}"
                                                    class="avatar avatar-sm rounded-circle border me-2" alt="Logo Sekolah"
                                                    style="width:40px; height:40px;">
                                                <span class="fw-semibold">SDN Contoh 1</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress flex-grow-1" style="height: 8px;">
                                                    <div class="progress-bar bg-success" style="width: 75%;" role="progressbar">
                                                    </div>
                                                </div>
                                                <span class="ms-2 text-success fw-bold">75%</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress flex-grow-1" style="height: 8px;">
                                                    <div class="progress-bar bg-warning" style="width: 40%;" role="progressbar">
                                                    </div>
                                                </div>
                                                <span class="ms-2 text-warning fw-bold">40%</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning text-dark">Sedang Proses</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('home.kuisoner') }}" class="btn btn-primary">Isi</a>
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