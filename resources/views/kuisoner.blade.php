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
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Pengguna Sistem</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <style type="text/css">
                        .tg {
                            border-collapse: collapse;
                            border-spacing: 0;
                        }

                        .tg td {
                            border-color: black;
                            border-style: solid;
                            border-width: 1px;
                            font-family: Arial, sans-serif;
                            font-size: 14px;
                            overflow: hidden;
                            padding: 10px 5px;
                            word-break: normal;
                        }

                        .tg th {
                            border-color: black;
                            border-style: solid;
                            border-width: 1px;
                            font-family: Arial, sans-serif;
                            font-size: 14px;
                            font-weight: normal;
                            overflow: hidden;
                            padding: 10px 5px;
                            word-break: normal;
                        }

                        .tg .tg-18eh {
                            border-color: #000000;
                            font-weight: bold;
                            text-align: center;
                            vertical-align: middle
                        }

                        .tg .tg-wp8o {
                            border-color: #000000;
                            text-align: center;
                            vertical-align: top
                        }

                        .tg .tg-ljam {
                            border-color: #000000;
                            text-align: center;
                            vertical-align: bottom
                        }

                        .tg .tg-0a7q {
                            border-color: #000000;
                            text-align: left;
                            vertical-align: middle
                        }

                        .tg .tg-xwyw {
                            border-color: #000000;
                            text-align: center;
                            vertical-align: middle
                        }

                        .tg .tg-kvxc {
                            border-color: #000000;
                            text-align: left;
                            vertical-align: bottom
                        }

                        .tg .tg-73oq {
                            border-color: #000000;
                            text-align: left;
                            vertical-align: top
                        }
                    </style>
                    <table class="tg">
                        <colgroup>
                            <col style=" width: 244.5px">
                            <col style="width: 376.5px">
                            <col style="width: 421.5px">
                            <col style="width: 133.5px">
                            <col style="width: 601.5px">
                            <col style="width: 121.5px">
                            <col style="width: 82.5px">
                            <col style="width: 67.5px">
                            <col style="width: 67.5px">
                            <col style="width: 211.5px">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>Nomor&nbsp;&nbsp;&nbsp;Register:</th>
                                <th>SB93#K</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>KOMPONEN</td>
                                <td>STANDAR</td>
                                <td>INDIKATOR {BOBOT}</td>
                                <td>URUT FOLDER KE</td>
                                <td>BUKTI</td>
                                <td>STATUS</td>
                                <td>BOBOT</td>
                                <td>TOTAL</td>
                                <td>NILAI</td>
                                <td>SARAN PERBAIKAN</td>
                            </tr>
                            <tr>
                                <td>Perencanaan Gerakan PBLHS</td>
                                <td>1. &nbsp;&nbsp;&nbsp;Rencana Gerakan PBLHS disusun berdasarkan Laporan EDS dan hasil
                                    IPMLH</td>
                                <td>Kesesuaian&nbsp;&nbsp;&nbsp;Rencana Gerakan PBLHS dengan Laporan EDS dan hasil IPMLH
                                </td>
                                <td rowspan="4">1</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;proses IPMLH sekolah, daerah dan global {1/2}</td>
                                <td><select class="Status1 default-select form-control wide mb-3" name="Status1[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td>bobotv1</td>
                                <td rowspan="13">Total1</td>
                                <td rowspan="13">Nilai1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="12"> <br><br><br><br><br><br><br><br><br><br><br></td>
                                <td rowspan="3"> <br><br></td>
                                <td rowspan="3">Sesuai dengan Laporan EDS dan hasil IPMLH {3}</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;proses EDS {1/2}</td>
                                <td><select class="Status1 default-select form-control wide mb-3" name="Status1[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td>bobotv1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Laporan EDS yang terkait lingkungan hidup {1/2}</td>
                                <td><select class="Status1 default-select form-control wide mb-3" name="Status1[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td>bobotv1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Tabel rencana Gerakan PBLHS {1/2}</td>
                                <td><select class="Status1 default-select form-control wide mb-3" name="Status1[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td>bobotv1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>2. Penyusunan Rencana Gerakan PBLHS&nbsp;&nbsp;&nbsp;melibatkan kepala sekolah, dewan
                                    pendidik, komite
                                    sekolah, peserta didik dan&nbsp;&nbsp;&nbsp;masyarakat</td>
                                <td>Pihak&nbsp;&nbsp;&nbsp;yang terlibat dalam penyusunan dokumen Rencana Gerakan PBLHS</td>
                                <td rowspan="3">2</td>
                                <td>Undangan,&nbsp;&nbsp;&nbsp;daftar hadir, notulensi rapat {1/2}</td>
                                <td><select class="Status1 default-select form-control wide mb-3" name="Status1[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td>bobotv1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="2"> <br></td>
                                <td rowspan="2">Kepala sekolah, dewan pendidik, dan komite&nbsp;&nbsp;&nbsp;sekolah {1}</td>
                                <td>Rencana&nbsp;&nbsp;&nbsp;Gerakan PBLHS yang disetujui kepala sekolah, dewan pendidik,
                                    komite
                                    sekolah,&nbsp;&nbsp;&nbsp;peserta didik, dan masyarakat {1/2}</td>
                                <td><select class="Status1 default-select form-control wide mb-3" name="Status1[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td>bobotv1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Dokumentasi (foto dan/atau video) {1}</td>
                                <td><select class="Status1 default-select form-control wide mb-3" name="Status1[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td>bobotv1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>3. Rencana Gerakan PBLHS terintegrasi dalam dokumen satu&nbsp;&nbsp;&nbsp;KTSP</td>
                                <td>Dokumen&nbsp;&nbsp;&nbsp;Satu KTSP (visi, misi, tujuan sekolah dan program pengembangan
                                    diri)
                                    yang&nbsp;&nbsp;&nbsp;membuat rencana Gerakan PBLHS</td>
                                <td rowspan="2">3</td>
                                <td>Dokumen&nbsp;&nbsp;&nbsp;Satu KTSP yang sudah ditandatangani oleh kepala sekolah dan
                                    komite
                                    sekolah,&nbsp;&nbsp;&nbsp;dan disahkan pejabat yang berwenang (2 tahun terakhir) {1/2}
                                </td>
                                <td><select class="Status1 default-select form-control wide mb-3" name="Status1[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td>bobotv1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td>Visi,&nbsp;&nbsp;&nbsp;misi, tujuan sekolah dan program pengembangan diri {3}</td>
                                <td>Program&nbsp;&nbsp;&nbsp;ekstrakurikuler dan pembiasaan diri {1/2}</td>
                                <td><select class="Status1 default-select form-control wide mb-3" name="Status1[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td>bobotv1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>4. Rencana Gerakan PBLHS&nbsp;&nbsp;&nbsp;terintegrasi dalam RPP</td>
                                <td>a. Jumlah&nbsp;&nbsp;&nbsp;aspek penerapan PRLH yang diintegrasi dalam RPP</td>
                                <td rowspan="2">4</td>
                                <td> </td>
                                <td> </td>
                                <td>bobotv1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="3"> <br><br></td>
                                <td>≥ 5 aspek {5}</td>
                                <td rowspan="3">Profil&nbsp;&nbsp;&nbsp;sekolah dan semua RPP yang memuat aspek penerapan
                                    PRLH yng sudah
                                    disahkan&nbsp;&nbsp;&nbsp;oleh kepala sekolah dan ditandatangani oleh pendidik pengampu
                                    (2
                                    tahun&nbsp;&nbsp;&nbsp;terakhir) {1/2}</td>
                                <td rowspan="3"><select class="Status1 default-select form-control wide mb-3"
                                        name="Status1[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                                <td rowspan="3">bobotv1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>b. % RPP yang mengintegrasikan aspek penerapan PRLH</td>
                                <td rowspan="2">5</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>· &gt; 80% {5}</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Pelaksanaan&nbsp;&nbsp;&nbsp;gerakan PBLHS</td>
                                <td colspan="6">Pembelajaran&nbsp;&nbsp;&nbsp;pada mata pelajaran, ekstrakurikuler dan
                                    pembiasaan diri
                                    yang&nbsp;&nbsp;&nbsp;mengintegrasikan penerapan PRLH di Sekolah</td>
                                <td rowspan="13">Total12</td>
                                <td rowspan="13">Nilai2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="51">
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                </td>
                                <td>a. Kebersihan, fungsi sanitasi,&nbsp;&nbsp;&nbsp;dan drainase</td>
                                <td>1) Jumlah&nbsp;&nbsp;&nbsp;unsur warga sekolah yang berpartisipasi dalam kegiatan
                                    kebersihan,
                                    fungsi&nbsp;&nbsp;&nbsp;sanitasi dan drainase sekolah</td>
                                <td rowspan="4">6</td>
                                <td>Profil&nbsp;&nbsp;&nbsp;sekolah {1/2}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="7"> <br><br><br><br><br><br></td>
                                <td rowspan="3">≤ 1 unsur utama {1}</td>
                                <td>Daftar&nbsp;&nbsp;&nbsp;piket kelas {1/2}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Dokumentasi hasil praktek/penugasan/penelitian&nbsp;&nbsp;&nbsp;kebersihan, fungsi
                                    sanitasi dan drainase
                                    sekolah {1}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>SK Tim/pokja kebersihan, fungsi sanitasi dan&nbsp;&nbsp;&nbsp;drainase sekolah {1/2/3}
                                </td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>2) Jumlah upaya pemeliharaan kebersihan, fungsi sanitasi&nbsp;&nbsp;&nbsp;dan drainase
                                    sekolah</td>
                                <td rowspan="2">7</td>
                                <td>Buku&nbsp;&nbsp;&nbsp;monitoring/ceklis kegiatan memelihara kebersihan, fungsi sanitasi
                                    dan&nbsp;&nbsp;&nbsp;drainase sekolah {1/2/3}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>≥ 7 upaya {5}</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;(foto dan/atau video) kegiatan memelihara kebersihan,
                                    fungsi sanitasi
                                    dan&nbsp;&nbsp;&nbsp;drainase sekolah {1}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>3) Terpeliharanya kebersihan, fungsi&nbsp;&nbsp;&nbsp;sanitasi dan drainase sekolah</td>
                                <td rowspan="2">8</td>
                                <td rowspan="2">Dokumentasi (foto dan/atau video) kegiatan&nbsp;&nbsp;&nbsp;memelihara
                                    kebersihan, fungsi
                                    sanitasi dan drainase sekolah sebelum dan&nbsp;&nbsp;&nbsp;setelah pelaksanaan Gerakan
                                    PBLHS {1}</td>
                                <td rowspan="2"><select class="Status2 default-select form-control wide mb-3"
                                        name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td rowspan="2">bobotv2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Sekolah bersih, sanitasi dan drainase berfungsi&nbsp;&nbsp;&nbsp;{3}</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>b. Pengelolaan sampah</td>
                                <td>1) Jumlah upaya pengurangan&nbsp;&nbsp;&nbsp;timbulan sampah dan penggunaan ulang
                                    barang/sampah
                                    (reduce&nbsp;&nbsp;&nbsp;dan reuse)</td>
                                <td rowspan="2">9</td>
                                <td rowspan="2">Dokumentasi hasil praktek/penugasan/penelitian&nbsp;&nbsp;&nbsp;pengurangan
                                    timbulan sampah
                                    dan penggunaan ulang barang/sampah (Reduce dan&nbsp;&nbsp;&nbsp;Reuse) baik pada mapel
                                    maupun
                                    ekstrakurikuler {1/2}</td>
                                <td rowspan="2"><select class="Status2 default-select form-control wide mb-3"
                                        name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td rowspan="2">bobotv2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="8"> <br><br><br><br><br><br><br></td>
                                <td>≥ 7 upaya {5}</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>2) &nbsp;&nbsp;&nbsp;Jumlah upaya daur ulang sampah</td>
                                <td rowspan="2">10</td>
                                <td>Bukti&nbsp;&nbsp;&nbsp;penyerahan sampah kepada pihak ketiga untuk didaur ulang {1/2/3}
                                </td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>≥ 3 upaya {3}</td>
                                <td>Daftar&nbsp;&nbsp;&nbsp;dan dokumentasi (foto dan/atau video) upaya pengurangan,
                                    penggunaan
                                    kembali&nbsp;&nbsp;&nbsp;dan daur ulang sampah {1/2}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>3) Pelibatan peserta didik dan kader adiwiyata, dalam pemindahan&nbsp;&nbsp;&nbsp;sampah
                                    dari sumber ke
                                    tempat pengelolaan sampah di sekolah (bank sampah,&nbsp;&nbsp;&nbsp;tempat pengomposan,
                                    dll)</td>
                                <td rowspan="3">11</td>
                                <td>Jadwal&nbsp;&nbsp;&nbsp;piket yang menunjukkan keterlibatan peserta didik dan kader
                                    Adiwiyata
                                    dalam&nbsp;&nbsp;&nbsp;mengumpulkan sampah dari sumbernya ke TPS {1/2}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="2">Peserta didik dan kader adiwiyata {3}</td>
                                <td>SOP&nbsp;&nbsp;&nbsp;pemindahan sampah yang menunjukkan keterlibatan peserta didik dan
                                    kader&nbsp;&nbsp;&nbsp;Adiwiyata {1/2/3}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Dokumentasi (foto dan/atau video) keterlibatan&nbsp;&nbsp;&nbsp;peserta didik dan kader
                                    Adiwiyata dalam
                                    kegiatan pemindahan sampah dari&nbsp;&nbsp;&nbsp;sumber ke tempat pengelolaan sampah di
                                    Sekolah {1/2}
                                </td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>4) %&nbsp;&nbsp;&nbsp;pengurangan timbulan sampah melalui 3R (reduce, reuse, recycle)
                                </td>
                                <td rowspan="2">12</td>
                                <td rowspan="2">Data/catatan volume sampah sebelum dan setelah&nbsp;&nbsp;&nbsp;melaksanakan
                                    Gerakan PBLHS
                                    selama satu tahun terakhir yang diketahui oleh&nbsp;&nbsp;&nbsp;Ketua Tim Adiwiyata
                                    sekolah atau Ketua
                                    pokja pengelolaan sampah {1/2}</td>
                                <td rowspan="2"><select class="Status2 default-select form-control wide mb-3"
                                        name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td rowspan="2">bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>&gt; 80% {5}</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>c. Penanaman dan pemeliharaan pohon/tanaman</td>
                                <td>1) Kegiatan&nbsp;&nbsp;&nbsp;penanaman, pemeliharaan dan pembibitan pohon/tanaman</td>
                                <td rowspan="2">13</td>
                                <td rowspan="2">Dokumentasi (foto dan/atau video) yang&nbsp;&nbsp;&nbsp;menggambarkan
                                    kondisi tanaman yang
                                    ditanam dan pembibitan, serta proses&nbsp;&nbsp;&nbsp;kegiatan penanaman, pemeliharaan
                                    dan pembibitan di
                                    lingkungan sekolah {1/2}</td>
                                <td rowspan="2"><select class="Status2 default-select form-control wide mb-3"
                                        name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td rowspan="2">bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="5"> <br><br><br><br></td>
                                <td>Penanaman&nbsp;&nbsp;&nbsp;dan pemeliharaan {2}</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>2) Jumlah unsur warga sekolah yang&nbsp;&nbsp;&nbsp;berpartisipasi dalam kegiatan
                                    penanaman,
                                    pemeliharaan dan pembibitan&nbsp;&nbsp;&nbsp;pohon/tanaman</td>
                                <td rowspan="2">14</td>
                                <td rowspan="2">Profil sekolah {1/2/3}</td>
                                <td rowspan="2"><select class="Status2 default-select form-control wide mb-3"
                                        name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td rowspan="2">bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>· ≥ 5 unsur {5}</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>3) Jumlah pohon/tanaman yang ditanam dan&nbsp;&nbsp;&nbsp;dipelihara</td>
                                <td rowspan="2">15</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;hasil praktek/penugasan/penelitian kegiatan penanaman,
                                    pemeliharaan
                                    dan&nbsp;&nbsp;&nbsp;pembibitan baik pada mapel maupun ekstrakurikuler {1/2}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>&gt; 60% - 80% {4}</td>
                                <td>Buku&nbsp;&nbsp;&nbsp;monitoring/cek list kegiatan penanaman, pemeliharaan dan
                                    pembibitan
                                    tanaman&nbsp;&nbsp;&nbsp;{1/2/3/4/5}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>d. Konservasi&nbsp;&nbsp;&nbsp;Air</td>
                                <td>Jumlah upaya&nbsp;&nbsp;&nbsp;konservasi air</td>
                                <td rowspan="2">16</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;hasil praktek/penugasan/penelitian kegiatan konservasi air
                                    {1/2/3}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td>≥ 7 upaya {5}</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;(foto dan/atau video) yang menunjukkan kegiatan konservasi
                                    air yang
                                    dilakukan&nbsp;&nbsp;&nbsp;sekolah {1/2}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>e. Konservasi&nbsp;&nbsp;&nbsp;Energi</td>
                                <td>Jumlah upaya&nbsp;&nbsp;&nbsp;konservasi energi</td>
                                <td rowspan="4">17</td>
                                <td>Aturan/tata&nbsp;&nbsp;&nbsp;tertib perilaku penghematan energi {1/2}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="3"> <br><br></td>
                                <td rowspan="3">≥ 7 upaya {5}</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;(foto dan/atau video) kegiatan konservasi energi {1}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Dokumentasi (foto dan/atau video) instalasi dan&nbsp;&nbsp;&nbsp;peralatan elektronik
                                    hemat energi {1}
                                </td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Dokumentasi hasil praktek/penugasan/penelitian&nbsp;&nbsp;&nbsp;terkait pembangkit
                                    listrik dari energi
                                    terbarukan (jika ada) {1}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>f. Inovasi&nbsp;&nbsp;&nbsp;terkait penerapan PRLH lainnya berdasarkan hasil IPMLH</td>
                                <td>Jumlah karya&nbsp;&nbsp;&nbsp;inovatif pendidik dan peserta didik</td>
                                <td rowspan="4">18</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;(foto dan/atau video) kegiatan terkait dengan karya
                                    inovatif dan
                                    proses&nbsp;&nbsp;&nbsp;penemuan karya inovatif Sekolah terkait dengan penerapan PRLH
                                    {1}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="3"> <br><br></td>
                                <td rowspan="3">· ≥ 5 karya inovatif</td>
                                <td>Karya&nbsp;&nbsp;&nbsp;inovatif yang dihasilkan oleh Sekolah {1}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Penghargaan karya inovatif terkait dengan&nbsp;&nbsp;&nbsp;penerapan PRLH {1}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Informasi detil dan penting terkait dengan karya&nbsp;&nbsp;&nbsp;inovatif yang telah
                                    dihasilkan Sekolah
                                    dalam upaya penerapan PRLH {1}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>2. Penerapan PRLH untuk masyarakat sekitar sekolah dan/atau di&nbsp;&nbsp;&nbsp;daerah
                                </td>
                                <td>1) Jumlah aksi penerapan PRLH&nbsp;&nbsp;&nbsp;untuk masyarakat sekitar sekolah</td>
                                <td rowspan="2">19</td>
                                <td>Dokumen&nbsp;&nbsp;&nbsp;(a.l: surat undangan, surat tugas, surat permohonan, absensi,
                                    notulensi,
                                    dll)&nbsp;&nbsp;&nbsp;aksi penerapan PRLH untuk dan bersama masyarakat sekitar Sekolah
                                    {1/2/3/4}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="5"> <br><br><br><br></td>
                                <td>· ≥ 4 aksi</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;(foto dan/atau video) aksi penerapan PRLH untuk dan bersama
                                    masyarakat&nbsp;&nbsp;&nbsp;sekitar Sekolah dari berbagai sudut pengambilan gambar
                                    {1/2/3}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>2) Kebersihan&nbsp;&nbsp;&nbsp;dan fungsi drainase di lingkungan sekitar sekolah</td>
                                <td rowspan="2">20</td>
                                <td rowspan="2">Dokumentasi (foto dan/atau video) kondisi&nbsp;&nbsp;&nbsp;kebersihan dan
                                    fungsi drainase di
                                    lingkungan sekitar Sekolah dari berbagai&nbsp;&nbsp;&nbsp;sudut pengambilan gambar {1/2}
                                </td>
                                <td rowspan="2"><select class="Status2 default-select form-control wide mb-3"
                                        name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td rowspan="2">bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>· Lingkungan sekitar sekolah bersih dan drainase berfungsi</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>3) Pengelolaan sampah di lingkungan sekitar sekolah</td>
                                <td rowspan="2">21</td>
                                <td rowspan="2">Dokumentasi (foto dan/atau video) pengelolaan&nbsp;&nbsp;&nbsp;sampah
                                    (pengurangan,
                                    pemilahan, pemanfaatan kembali dan daur ulang) di&nbsp;&nbsp;&nbsp;lingkungan sekitar
                                    Sekolah dari
                                    berbagai sudut pengambilan gambar {1/2}</td>
                                <td rowspan="2"><select class="Status2 default-select form-control wide mb-3"
                                        name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td rowspan="2">bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>· Sampah terpilah dan terkelola dengan baik</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>3. Membentuk&nbsp;&nbsp;&nbsp;jejaring kerja dan komunikasi</td>
                                <td>Jumlah&nbsp;&nbsp;&nbsp;jejaring kerja dan komunikasi (antar warga sekolah, antar
                                    sekolah dan
                                    dengan&nbsp;&nbsp;&nbsp;instansi/pihak terkait)</td>
                                <td rowspan="4">22</td>
                                <td>Dokumen&nbsp;&nbsp;&nbsp;MoU atau dokumen kerjasama lainnya antara Sekolah dengan mitra
                                    {1/2}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="3"> <br><br></td>
                                <td rowspan="3">· ≥ 5 jejaring</td>
                                <td>Dokumen&nbsp;&nbsp;&nbsp;tertulis (undangan, notulensi pertemuan, serah terima bantuan
                                    dan
                                    dokumen&nbsp;&nbsp;&nbsp;terkait lainnya) {1}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Dokumentasi (foto dan/atau video) pertemuan,&nbsp;&nbsp;&nbsp;rapat yang dilakukan {1}
                                </td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Tauatan dari group jejaring kerja dan komunikasi&nbsp;&nbsp;&nbsp;di media social {1}
                                </td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>4. Kampanye&nbsp;&nbsp;&nbsp;dan publikasi Gerakan PBLHS</td>
                                <td>1) Jumlah kegiatan kampanye dan&nbsp;&nbsp;&nbsp;publikasi Gerakan PBLHS</td>
                                <td rowspan="2">23</td>
                                <td>Dokumen&nbsp;&nbsp;&nbsp;tertulis (undangan, brosur, leaflet dll) {1/2/3}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="3"> <br><br></td>
                                <td>· ≥ 5 kegiatan</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;kampanye yang menunjukkan jumlah dan materi kegiatan.
                                    Dokumentasi
                                    dapat&nbsp;&nbsp;&nbsp;berupa foto dan/atau video (bisa dalam bentuk tautan) {1/2}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>2) Jumlah&nbsp;&nbsp;&nbsp;media publikasi</td>
                                <td rowspan="2">24</td>
                                <td rowspan="2">Media publikasi (majalah dinding, poster,
                                    slogan,&nbsp;&nbsp;&nbsp;bulletin/majalah sekolah,
                                    website/blog/fanpage sekolah, pameran, media&nbsp;&nbsp;&nbsp;sosial, media cetak, media
                                    elektronik dan
                                    media lainnya) yang memuat materi&nbsp;&nbsp;&nbsp;kampanye Gerakan PBLHS {1/2/3}</td>
                                <td rowspan="2"><select class="Status2 default-select form-control wide mb-3"
                                        name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td rowspan="2">bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>· ≥ 5 media</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>5. Membentuk&nbsp;&nbsp;&nbsp;dan memberdayakan kader adiwiyata</td>
                                <td>1) % kader adiwiyata yang&nbsp;&nbsp;&nbsp;dibentuk</td>
                                <td rowspan="2">25</td>
                                <td rowspan="2">Surat undangan, poster, dan dokumen tertulis&nbsp;&nbsp;&nbsp;terkait dengan
                                    kegiatan
                                    pemberdayaan Kader Adiwiyata {1/2/3/4}</td>
                                <td rowspan="2"><select class="Status2 default-select form-control wide mb-3"
                                        name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td rowspan="2">bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="3"> <br><br></td>
                                <td>· &gt; 20 %</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>2) Jumlah kegiatan pemberdayaan kader adiwiyata</td>
                                <td rowspan="2">26</td>
                                <td>Dokumen&nbsp;&nbsp;&nbsp;pembagian tugas atau rencana aksi Kader Adiwiyata {1/2/3/4}
                                </td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>· ≥ 5 kegiatan</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;(foto dan/atau video) kegiatan pemberdayaan Kader Adiwiyata
                                    {1/2}</td>
                                <td><select class="Status2 default-select form-control wide mb-3" name="Status2[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv2</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Pemantauan&nbsp;&nbsp;&nbsp;dan Evaluasi Gerakan PBLHS</td>
                                <td>1. Melaksanakan pemantauan dan&nbsp;&nbsp;&nbsp;evaluasi pelaksanaan Gerakan PBLHS</td>
                                <td>1) Frekuensi pelaksanaan&nbsp;&nbsp;&nbsp;pemantauan dan evaluasi</td>
                                <td rowspan="2">27</td>
                                <td>Tabel&nbsp;&nbsp;&nbsp;setiap pemantauan dan evaluasi pelaksanaan Gerakan PBLHS yang
                                    ditandatangani&nbsp;&nbsp;&nbsp;oleh kepala sekolah. {1/2/3/4}</td>
                                <td><select class="Status3 default-select form-control wide mb-3" name="Status3[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv3</td>
                                <td rowspan="8">Total3</td>
                                <td rowspan="8">Nilai3</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="7"> <br><br><br><br><br><br></td>
                                <td rowspan="3"> <br><br></td>
                                <td>· 3 kali dalam 1 tahun</td>
                                <td>Tabel&nbsp;&nbsp;&nbsp;dicantumkan periode pemantauan (di atas tabel). Apabila dalam 1
                                    tahun&nbsp;&nbsp;&nbsp;dilakukan 3 kali pemantauan dan evaluasi, maka table pemantauan
                                    berjumlah
                                    3.&nbsp;&nbsp;&nbsp;Contoh: Pemantauan dan Evaluasi Pelaksanaan Gerakan PBLHS Januari
                                    s.d.
                                    Maret&nbsp;&nbsp;&nbsp;2019</td>
                                <td> </td>
                                <td>bobotv3</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>2) % rencana&nbsp;&nbsp;&nbsp;kegiatan Gerakan PBLHS yang terlaksana</td>
                                <td rowspan="2">28</td>
                                <td>Tabel&nbsp;&nbsp;&nbsp;rencana Gerakan PBLHS yang ditandatangani oleh kepala sekolah
                                    {1/2}</td>
                                <td><select class="Status3 default-select form-control wide mb-3" name="Status3[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv3</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>· &gt; 80 %</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;(foto dan/atau video) setiap pemantauan dan evaluasi
                                    pelaksanaan
                                    Gerakan&nbsp;&nbsp;&nbsp;PBLHS {1}</td>
                                <td><select class="Status3 default-select form-control wide mb-3" name="Status3[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv3</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="4">2. Pemantauan&nbsp;&nbsp;&nbsp;dan evaluasi melibatkan kepala sekolah, dewan
                                    pendidik,
                                    komite sekolah,&nbsp;&nbsp;&nbsp;peserta didik dan masyarakat</td>
                                <td>Pemantauan dan&nbsp;&nbsp;&nbsp;evaluasi melibatkan para pihak</td>
                                <td rowspan="4">29</td>
                                <td>Tabel&nbsp;&nbsp;&nbsp;setiap pemantauan dan evaluasi pelaksanaan Gerakan PBLHS yang
                                    disusun
                                    oleh&nbsp;&nbsp;&nbsp;Tim Adiwiyata Sekolah {1}</td>
                                <td><select class="Status3 default-select form-control wide mb-3" name="Status3[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv3</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td rowspan="3">· Melibatkan kepala sekolah, dewan pendidik, komite
                                    sekolah,&nbsp;&nbsp;&nbsp;peserta didik
                                    dan masyarakat</td>
                                <td>Dokumentasi&nbsp;&nbsp;&nbsp;(foto dan/atau video) pelibatan para pihak {1}</td>
                                <td><select class="Status3 default-select form-control wide mb-3" name="Status3[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv3</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Undangan, daftar hadir, dan notulensi pelibatan&nbsp;&nbsp;&nbsp;para pihak {1}</td>
                                <td><select class="Status3 default-select form-control wide mb-3" name="Status3[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv3</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Tabel setiap pemantauan dan evaluasi pelaksanaan&nbsp;&nbsp;&nbsp;Gerakan PBLHS yang
                                    ditandatangani oleh
                                    kepala sekolah {1}</td>
                                <td><select class="Status3 default-select form-control wide mb-3" name="Status3[]">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td>bobotv3</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="3">Nilai Kuanta Total</td>
                                <td></td>
                                <td>100</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('scripts')
    <script>
        function hitungTotalBobot() {
            let total = 0;
            document.querySelectorAll('.bobot-select').forEach(select => {
                total += parseInt(select.value) || 0;
            });

            document.getElementById('totalBobot').innerText = total;

            console.log('Total bobot saat ini:', total);


        }

        // Event listener untuk semua select
        document.querySelectorAll('.bobot-select').forEach(select => {
            select.addEventListener('change', hitungTotalBobot);
        });

        hitungTotalBobot();

        $(document).ready(function () {
            hitungTotalBobot()
        });
    </script>

@endpush
