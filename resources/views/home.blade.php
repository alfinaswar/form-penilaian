@extends('layouts.app')

@section('content')
    @if (session()->has('success'))
        <script>
            setTimeout(function() {
                swal.fire({
                    title: "{{ __('Success!') }}",
                    text: "{!! \Session::get('success') !!}",
                    icon: "success",
                    type: "success"
                });
            }, 1000); // delay 1 detik
        </script>
    @endif
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
                                    <th rowspan="2" style="vertical-align: middle;">NO</th>
                                    <th rowspan="2" style="vertical-align: middle;">REGISTER</th>
                                    <th>JENJANG</th>
                                    <th colspan="2" style="vertical-align: middle;">STATUS</th>
                                    <th colspan="2" style="vertical-align: middle;">NILAI</th>
                                    <th rowspan="2" style="vertical-align: middle;">Aksi</th>
                                </tr>
                                <tr>
                                    <th>SEKOLAH</th>
                                    <th>Kuesioner</th>
                                    <th>Bukti Dukung</th>
                                    <th>Kuesioner</th>
                                    <th>Bukti Dukung</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><a href="{{ route('profil.sekolah', $item->id) }}">{{ $item->reg_number }}</a>
                                        </td>
                                        <td>{{ $item->jenjang }}</td>
                                        <td>{{ $item->Nilai->StatusKuisoner ?? 'PROGRESS' }}</td>
                                        <td>{{ $item->Nilai->StatusBukti ?? 'PROGRESS' }}</td>
                                        <td>{{ $item->Nilai->NilaiKuisoner ?? 'PROGRESS' }}</td>
                                        <td>{{ $item->NilaiKuisoner->TotalAkhir ?? 'PROGRESS' }}</td>
                                        <td>
                                            @can('aksi-admin')
                                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#inputModal" data-id="{{ $item->id }}"
                                                    data-register="{{ $item->reg_number }}">
                                                    <i class="fa fa-clipboard-list"></i> Form Penilaian
                                                </button>

                                                <a href="{{ route('kuisoner.create', $item->id) }}" target="_blank"
                                                    class="btn btn-sm btn-info" style="margin-top: 5px;">
                                                    <i class="fa fa-file-alt"></i> Kuesioner
                                                </a>

                                                <a href="{{ route('nilai.cetak_pdf', $item->id) }}" target="_blank"
                                                    class="btn btn-sm btn-success" style="margin-top: 5px;">
                                                    <i class="fa fa-file-pdf"></i> Cetak PDF
                                                </a>
                                            @endcan'
                                            @can('aksi-sekolah')
                                                <a href="{{ route('nilai.cetak_pdf', $item->id) }}" target="_blank"
                                                    class="btn btn-sm btn-success" style="margin-top: 5px;">
                                                    <i class="fa fa-file-pdf"></i> Cetak PDF
                                                </a>
                                            @endcan
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

    <!-- Modal Input -->
    <div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('nilai.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="IdUser" id="modalUserId">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Input Data Kuesioner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <div class="mb-3">
                                <label>Nomor Register</label><br>

                                <span id="modalRegister" style="font-size: 16px; color: black; font-weight: bold;"></span>
                            </div>
                        </center>


                        <div class="mb-3">
                            <label>Status Kuesioner</label>
                            <select name="StatusKuisoner" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="VALID">VALID</option>
                                <option value="TIDAK VALID">TIDAK VALID</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Status Bukti</label>
                            <select name="StatusBukti" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="VALID">VALID</option>
                                <option value="TIDAK VALID">TIDAK VALID</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Nilai Kuesioner</label>
                            <input type="text" name="NilaiKuisoner" class="form-control" placeholder="Masukkan Nilai">
                        </div>
                        <div class="mb-3">
                            <label>Nilai Bukti</label>
                            <input type="text" name="NilaiBukti" class="form-control" placeholder="Masukkan Nilai">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const inputModal = document.getElementById('inputModal');
        inputModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const userId = button.getAttribute('data-id');
            const regNumber = button.getAttribute('data-register');

            // Set nilai ke input hidden dan input display
            document.getElementById('modalUserId').value = userId;
            document.getElementById('modalRegister').innerText = regNumber;
        });
    </script>
@endpush
