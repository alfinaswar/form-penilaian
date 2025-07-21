<html>

<head>
    <style>
        /* Style khusus untuk tabel dengan rowspan di DOMPDF */
        #tablenilai {
            width: 100%;
            border-collapse: separate;
            /* PENTING: gunakan separate untuk rowspan */
            border-spacing: 0;
            margin: 10px 0;
            font-family: Arial, sans-serif;
            font-size: 12px;
            border: 1px solid #000;
        }

        /* Header tetap muncul di setiap halaman */
        #tablenilai thead {
            display: table-header-group;
        }

        #tablenilai tbody {
            display: table-row-group;
        }

        #tablenilai th {
            background-color: #f5f5f5;
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
            padding: 8px 5px;
            text-align: center;
            font-weight: bold;
            page-break-inside: avoid;
        }

        #tablenilai td {
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
            padding: 6px 5px;
            text-align: left;
            vertical-align: top;
        }

        /* Style khusus untuk cell dengan rowspan */
        #tablenilai .rowspan-cell {
            vertical-align: middle;
            text-align: center;
            font-weight: bold;
            background-color: #f0f8ff;

            /* KUNCI: hindari page break di dalam rowspan cell */
            page-break-inside: avoid;
        }

        /* Grup baris yang tidak boleh dipisah */
        #tablenilai .no-break-group {
            page-break-inside: avoid;
            page-break-before: auto;
            page-break-after: auto;
        }

        /* Style untuk baris pertama dalam grup */
        #tablenilai .group-start {
            page-break-before: auto;
        }

        /* Style untuk baris terakhir dalam grup */
        #tablenilai .group-end {
            page-break-after: auto;
        }

        /* Alternative: gunakan class untuk menandai grup rowspan */
        #tablenilai .rowspan-group {
            page-break-inside: avoid;
        }

        /* Kolom width yang tetap */
        #tablenilai .col-kategori {
            width: 15%;
        }

        #tablenilai .col-no {
            width: 5%;
            text-align: center;
        }

        #tablenilai .col-nama {
            width: 25%;
        }

        #tablenilai .col-nilai {
            width: 10%;
            text-align: center;
        }

        #tablenilai .col-keterangan {
            width: 20%;
        }

        /* Style untuk caption */
        #tablenilai caption {
            caption-side: top;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        /* Container untuk kontrol layout */
        .table-container {
            overflow: visible;
            margin: 10px 0;
        }

        /* Zebra striping yang aware terhadap rowspan */
        #tablenilai .group-odd {
            background-color: #f9f9f9;
        }

        #tablenilai .group-even {
            background-color: #ffffff;
        }

        /* Override untuk rowspan cell background */
        #tablenilai .rowspan-cell.group-odd {
            background-color: #e6f3ff;
        }

        #tablenilai .rowspan-cell.group-even {
            background-color: #f0f8ff;
        }

        /* Style untuk print/PDF */
        @media print {
            #tablenilai {
                font-size: 11px;
            }

            #tablenilai th,
            #tablenilai td {
                padding: 4px 3px;
            }
        }

        /* Fallback: jika rowspan tetap bermasalah, gunakan alternative layout */
        .alternative-layout {
            display: none;
            /* Tampilkan jika diperlukan */
        }

        .alternative-layout table {
            border-collapse: collapse;
            width: 100%;
        }

        .alternative-layout .group-header {
            background-color: #e6f3ff;
            font-weight: bold;
            text-align: center;
        }

        .alternative-layout .group-item {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="table-responsive">

        <div class="row mb-3">
            <div class="col-12">
                <label for="link" class="form-label"><b>Masukkan link bukti (misal: Google
                        Drive)</b></label>
                <input type="text" class="form-control" name="link" id="link"
                    placeholder="Contoh: https://drive.google.com/....">
            </div>
        </div>
        <table id="tablenilai">
            <colgroup>
                <col style="width: 244.5px">
                <col style="width: 376.5px">
                <col style="width: 221.5px">
                <col style="width: 133.5px">
                <col style="width: 601.5px">
                <col style="width: 121.5px">
                <col style="width: 82.5px">
                <col style="width: 167.5px">
                <col style="width: 167.5px">
                <col style="width: 211.5px">
            </colgroup>
            <thead>
                <tr>
                    <th>KOMPONEN</th>
                    <th>STANDAR</th>
                    <th>INDIKATOR</th>
                    <th>URUT FOLDER</th>
                    <th>BUKTI</th>
                    <th>STATUS</th>
                    <th>BOBOT</th>
                    <th>TOTAL</th>
                    <th>NILAI</th>
                    <th>SARAN PERBAIKAN</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Perencanaan Gerakan PBLHS</td>
                    <td>1. Rencana Gerakan PBLHS disusun berdasarkan Laporan EDS dan hasil
                        IPMLH</td>
                    <td>Kesesuaian Rencana Gerakan PBLHS dengan Laporan EDS dan hasil IPMLH
                    </td>
                    <td rowspan="4">1</td>
                    <td>Dokumentasi proses IPMLH sekolah, daerah dan global {1/2}</td>
                    <td>{{$data->NilaiKuisoner->Status1[0] ?? ''}}
                    </td>
                    <td>

                        {{$data->NilaiKuisoner->Bobot1[0] ?? ''}}
                    </td>
                    <td rowspan="13">{{$data->NilaiKuisoner->Total1[0] ?? ''}}
                    </td>
                    <td rowspan="13">{{$data->NilaiKuisoner->Nilai1[0] ?? ''}}
                    </td>
                    <td>{{$data->NilaiKuisoner->Catatan[0] ?? ''}}
                    </td>
                </tr>
                <tr>
                    <td rowspan="12"></td>
                    <td rowspan="3"></td>
                    <td rowspan="3">Sesuai dengan Laporan EDS dan hasil IPMLH {3}</td>
                    <td>Dokumentasi proses EDS {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status1[1] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot1[1] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[1] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Laporan EDS yang terkait lingkungan hidup {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status1[2] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot1[2] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[2] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Tabel rencana Gerakan PBLHS {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status1[3] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot1[3] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[3] ?? '' }}</td>
                </tr>
                <tr>
                    <td>2. Penyusunan Rencana Gerakan PBLHS melibatkan kepala sekolah, dewan pendidik, komite sekolah,
                        peserta didik dan masyarakat</td>
                    <td>Pihak yang terlibat dalam penyusunan dokumen Rencana Gerakan PBLHS</td>
                    <td rowspan="3">2</td>
                    <td>Undangan, daftar hadir, notulensi rapat {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status1[4] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot1[4] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[4] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="2"> <br></td>
                    <td rowspan="2">Kepala sekolah, dewan pendidik, dan komite sekolah {1}</td>
                    <td>Rencana Gerakan PBLHS yang disetujui kepala sekolah, dewan pendidik, komite sekolah, peserta
                        didik, dan masyarakat {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status1[5] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot1[5] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[5] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Dokumentasi (foto dan/atau video) {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status1[6] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot1[6] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[6] ?? '' }}</td>
                </tr>
                <tr>
                    <td>3. Rencana Gerakan PBLHS terintegrasi dalam dokumen satu KTSP</td>
                    <td>Dokumen Satu KTSP (visi, misi, tujuan sekolah dan program pengembangan diri) yang membuat
                        rencana Gerakan PBLHS</td>
                    <td rowspan="2">3</td>
                    <td>Dokumen Satu KTSP yang sudah ditandatangani oleh kepala sekolah dan komite sekolah, dan disahkan
                        pejabat yang berwenang (2 tahun terakhir) {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status1[7] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot1[7] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[7] ?? '' }}</td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>Visi, misi, tujuan sekolah dan program pengembangan diri {3}</td>
                    <td>Program ekstrakurikuler dan pembiasaan diri {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status1[8] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot1[8] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[8] ?? '' }}</td>
                </tr>
                <tr>
                    <td>4. Rencana Gerakan PBLHS terintegrasi dalam RPP</td>
                    <td>a. Jumlah aspek penerapan PRLH yang diintegrasi dalam RPP</td>
                    <td rowspan="2">4</td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3"> <br><br></td>
                    <td>≥ 5 aspek {5}</td>
                    <td rowspan="3">Profil sekolah dan semua RPP yang memuat aspek penerapan
                        PRLH yng sudah
                        disahkan oleh kepala sekolah dan ditandatangani oleh pendidik pengampu
                        (2
                        tahun terakhir) {1/2}</td>
                    <td rowspan="3">{{ $data->NilaiKuisoner->Status1[9] ?? '' }}</td>
                    <td rowspan="3">{{ $data->NilaiKuisoner->Bobot1[9] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[9] ?? '' }}</td>
                </tr>
                <tr>
                    <td>b. % RPP yang mengintegrasikan aspek penerapan PRLH</td>
                    <td rowspan="2">5</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[10] ?? '' }}</td>
                </tr>
                <tr>
                    <td>· &gt; 80% {5}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[11] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Pelaksanaan gerakan PBLHS</td>
                    <td colspan="6">Pembelajaran pada mata pelajaran, ekstrakurikuler dan
                        pembiasaan diri
                        yang mengintegrasikan penerapan PRLH di Sekolah</td>
                    <td rowspan="52">{{ $data->NilaiKuisoner->Total2[0] ?? '' }}</td>
                    <td rowspan="52">{{ $data->NilaiKuisoner->Nilai2[0] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[12] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="51">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </td>
                    <td>a. Kebersihan, fungsi sanitasi, dan drainase</td>
                    <td>1) Jumlah unsur warga sekolah yang berpartisipasi dalam kegiatan
                        kebersihan,
                        fungsi sanitasi dan drainase sekolah</td>
                    <td rowspan="4">6</td>
                    <td>Profil sekolah {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[0] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[0] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[13] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="7"> <br><br><br><br><br><br></td>
                    <td rowspan="3">≤ 1 unsur utama {1}</td>
                    <td>Daftar piket kelas {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[1] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[1] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[14] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Dokumentasi hasil praktek/penugasan/penelitian kebersihan, fungsi
                        sanitasi dan drainase
                        sekolah {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[2] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[2] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[15] ?? '' }}</td>
                </tr>
                <tr>
                    <td>SK Tim/pokja kebersihan, fungsi sanitasi dan drainase sekolah {1/2/3}
                    </td>
                    <td>{{ $data->NilaiKuisoner->Status2[3] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[3] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[16] ?? '' }}</td>
                </tr>
                <tr>
                    <td>2) Jumlah upaya pemeliharaan kebersihan, fungsi sanitasi dan drainase
                        sekolah</td>
                    <td rowspan="2">7</td>
                    <td>Buku monitoring/ceklis kegiatan memelihara kebersihan, fungsi sanitasi
                        dan drainase sekolah {1/2/3}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[4] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[4] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[17] ?? '' }}</td>
                </tr>
                <tr>
                    <td>≥ 7 upaya {5}</td>
                    <td>Dokumentasi (foto dan/atau video) kegiatan memelihara kebersihan,
                        fungsi sanitasi
                        dan drainase sekolah {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[5] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[5] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[18] ?? '' }}</td>
                </tr>
                <tr>
                    <td>3) Terpeliharanya kebersihan, fungsi sanitasi dan drainase sekolah</td>
                    <td rowspan="2">8</td>
                    <td rowspan="2">Dokumentasi (foto dan/atau video) kegiatan memelihara
                        kebersihan, fungsi
                        sanitasi dan drainase sekolah sebelum dan setelah pelaksanaan Gerakan
                        PBLHS {1}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Status2[6] ?? '' }}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Bobot2[6] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[19] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Sekolah bersih, sanitasi dan drainase berfungsi {3}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[20] ?? '' }}</td>
                </tr>
                <tr>
                    <td>b. Pengelolaan sampah</td>
                    <td>1) Jumlah upaya pengurangan timbulan sampah dan penggunaan ulang
                        barang/sampah
                        (reduce dan reuse)</td>
                    <td rowspan="2">9</td>
                    <td rowspan="2">Dokumentasi hasil praktek/penugasan/penelitian pengurangan
                        timbulan sampah
                        dan penggunaan ulang barang/sampah (Reduce dan Reuse) baik pada mapel
                        maupun
                        ekstrakurikuler {1/2}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Status2[7] ?? '' }}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Bobot2[7] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[21] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="8"> <br><br><br><br><br><br><br></td>
                    <td>≥ 7 upaya {5}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[22] ?? '' }}</td>
                </tr>
                <tr>
                    <td>2) Jumlah upaya daur ulang sampah</td>
                    <td rowspan="2">10</td>
                    <td>Bukti penyerahan sampah kepada pihak ketiga untuk didaur ulang {1/2/3}
                    </td>
                    <td>{{ $data->NilaiKuisoner->Status2[8] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[8] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[23] ?? '' }}</td>
                </tr>
                <tr>
                    <td>≥ 3 upaya {3}</td>
                    <td>Daftar dan dokumentasi (foto dan/atau video) upaya pengurangan,
                        penggunaan
                        kembali dan daur ulang sampah {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[9] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[9] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[24] ?? '' }}</td>
                </tr>
                <tr>
                    <td>3) Pelibatan peserta didik dan kader adiwiyata, dalam pemindahan sampah
                        dari sumber ke
                        tempat pengelolaan sampah di sekolah (bank sampah, tempat pengomposan,
                        dll)</td>
                    <td rowspan="3">11</td>
                    <td>Jadwal piket yang menunjukkan keterlibatan peserta didik dan kader
                        Adiwiyata
                        dalam mengumpulkan sampah dari sumbernya ke TPS {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[10] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[10] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[25] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="2">Peserta didik dan kader adiwiyata {3}</td>
                    <td>SOP pemindahan sampah yang menunjukkan keterlibatan peserta didik dan
                        kader Adiwiyata {1/2/3}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[11] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[11] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[26] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Dokumentasi (foto dan/atau video) keterlibatan peserta didik dan kader
                        Adiwiyata dalam
                        kegiatan pemindahan sampah dari sumber ke tempat pengelolaan sampah di
                        Sekolah {1/2}
                    </td>
                    <td>{{ $data->NilaiKuisoner->Status2[12] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[12] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[27] ?? '' }}</td>
                </tr>
                <tr>
                    <td>4) % pengurangan timbulan sampah melalui 3R (reduce, reuse, recycle)
                    </td>
                    <td rowspan="2">12</td>
                    <td rowspan="2">Data/catatan volume sampah sebelum dan setelah melaksanakan
                        Gerakan PBLHS
                        selama satu tahun terakhir yang diketahui oleh Ketua Tim Adiwiyata
                        sekolah atau Ketua
                        pokja pengelolaan sampah {1/2}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Status2[13] ?? '' }}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Bobot2[13] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[28] ?? '' }}</td>
                </tr>
                <tr>
                    <td>&gt; 80% {5}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[29] ?? '' }}</td>
                </tr>
                <tr>
                    <td>c. Penanaman dan pemeliharaan pohon/tanaman</td>
                    <td>1) Kegiatan penanaman, pemeliharaan dan pembibitan pohon/tanaman</td>
                    <td rowspan="2">13</td>
                    <td rowspan="2">Dokumentasi (foto dan/atau video) yang menggambarkan
                        kondisi tanaman yang
                        ditanam dan pembibitan, serta proses kegiatan penanaman, pemeliharaan
                        dan pembibitan di
                        lingkungan sekolah {1/2}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Status2[14] ?? '' }}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Bobot2[14] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[30] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="5"> <br><br><br><br></td>
                    <td>Penanaman dan pemeliharaan {2}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[31] ?? '' }}</td>
                </tr>
                <tr>
                    <td>2) Jumlah unsur warga sekolah yang berpartisipasi dalam kegiatan
                        penanaman,
                        pemeliharaan dan pembibitan pohon/tanaman</td>
                    <td rowspan="2">14</td>
                    <td rowspan="2">Profil sekolah {1/2/3}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Status2[15] ?? '' }}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Bobot2[15] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[32] ?? '' }}</td>
                </tr>
                <tr>
                    <td>· ≥ 5 unsur {5}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[33] ?? '' }}</td>
                </tr>
                <tr>
                    <td>3) Jumlah pohon/tanaman yang ditanam dan dipelihara</td>
                    <td rowspan="2">15</td>
                    <td>Dokumentasi hasil praktek/penugasan/penelitian kegiatan penanaman,
                        pemeliharaan
                        dan pembibitan baik pada mapel maupun ekstrakurikuler {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[16] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[16] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[34] ?? '' }}</td>
                </tr>
                <tr>
                    <td>&gt; 60% - 80% {4}</td>
                    <td>Buku monitoring/cek list kegiatan penanaman, pemeliharaan dan
                        pembibitan
                        tanaman {1/2/3/4/5}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[17] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[17] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[35] ?? '' }}</td>
                </tr>
                <tr>
                    <td>d. Konservasi Air</td>
                    <td>Jumlah upaya konservasi air</td>
                    <td rowspan="2">16</td>
                    <td>Dokumentasi hasil praktek/penugasan/penelitian kegiatan konservasi air
                        {1/2/3}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[18] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[18] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[36] ?? '' }}</td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>≥ 7 upaya {5}</td>
                    <td>Dokumentasi (foto dan/atau video) yang menunjukkan kegiatan konservasi
                        air yang
                        dilakukan sekolah {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[19] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[19] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[37] ?? '' }}</td>
                </tr>
                <tr>
                    <td>e. Konservasi Energi</td>
                    <td>Jumlah upaya konservasi energi</td>
                    <td rowspan="4">17</td>
                    <td>Aturan/tata tertib perilaku penghematan energi {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[20] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[20] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[38] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3"> <br><br></td>
                    <td rowspan="3">≥ 7 upaya {5}</td>
                    <td>Dokumentasi (foto dan/atau video) kegiatan konservasi energi {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[21] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[21] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[39] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Dokumentasi (foto dan/atau video) instalasi dan peralatan elektronik
                        hemat energi {1}
                    </td>
                    <td>{{ $data->NilaiKuisoner->Status2[22] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[22] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[40] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Dokumentasi hasil praktek/penugasan/penelitian terkait pembangkit
                        listrik dari energi
                        terbarukan (jika ada) {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[23] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[23] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[41] ?? '' }}</td>
                </tr>
                <tr>
                    <td>f. Inovasi terkait penerapan PRLH lainnya berdasarkan hasil IPMLH</td>
                    <td>Jumlah karya inovatif pendidik dan peserta didik</td>
                    <td rowspan="4">18</td>
                    <td>Dokumentasi (foto dan/atau video) kegiatan terkait dengan karya
                        inovatif dan
                        proses penemuan karya inovatif Sekolah terkait dengan penerapan PRLH
                        {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[24] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[24] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[42] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3"> <br><br></td>
                    <td rowspan="3">· ≥ 5 karya inovatif</td>
                    <td>Karya inovatif yang dihasilkan oleh Sekolah {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[25] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[25] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[43] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Penghargaan karya inovatif terkait dengan penerapan PRLH {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[26] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[26] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[44] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Informasi detil dan penting terkait dengan karya inovatif yang telah
                        dihasilkan Sekolah
                        dalam upaya penerapan PRLH {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[27] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[27] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[45] ?? '' }}</td>
                </tr>
                <tr>
                    <td>2. Penerapan PRLH untuk masyarakat sekitar sekolah dan/atau di daerah
                    </td>
                    <td>1) Jumlah aksi penerapan PRLH untuk masyarakat sekitar sekolah</td>
                    <td rowspan="2">19</td>
                    <td>Dokumen (a.l: surat undangan, surat tugas, surat permohonan, absensi,
                        notulensi,
                        dll) aksi penerapan PRLH untuk dan bersama masyarakat sekitar Sekolah
                        {1/2/3/4}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[28] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[28] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[46] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="5"> <br><br><br><br></td>
                    <td>· ≥ 4 aksi</td>
                    <td>Dokumentasi (foto dan/atau video) aksi penerapan PRLH untuk dan bersama
                        masyarakat sekitar Sekolah dari berbagai sudut pengambilan gambar
                        {1/2/3}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[29] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[29] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[47] ?? '' }}</td>
                </tr>
                <tr>
                    <td>2) Kebersihan dan fungsi drainase di lingkungan sekitar sekolah</td>
                    <td rowspan="2">20</td>
                    <td rowspan="2">Dokumentasi (foto dan/atau video) kondisi kebersihan dan
                        fungsi drainase di
                        lingkungan sekitar Sekolah dari berbagai sudut pengambilan gambar {1/2}
                    </td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Status2[30] ?? '' }}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Bobot2[30] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[48] ?? '' }}</td>
                </tr>
                <tr>
                    <td>· Lingkungan sekitar sekolah bersih dan drainase berfungsi</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[49] ?? '' }}</td>
                </tr>
                <tr>
                    <td>3) Pengelolaan sampah di lingkungan sekitar sekolah</td>
                    <td rowspan="2">21</td>
                    <td rowspan="2">Dokumentasi (foto dan/atau video) pengelolaan sampah
                        (pengurangan,
                        pemilahan, pemanfaatan kembali dan daur ulang) di lingkungan sekitar
                        Sekolah dari
                        berbagai sudut pengambilan gambar {1/2}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Status2[31] ?? '' }}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Bobot2[31] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[50] ?? '' }}</td>
                </tr>
                <tr>
                    <td>· Sampah terpilah dan terkelola dengan baik</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[51] ?? '' }}</td>
                </tr>
                <tr>
                    <td>3. Membentuk jejaring kerja dan komunikasi</td>
                    <td>Jumlah jejaring kerja dan komunikasi (antar warga sekolah, antar
                        sekolah dan
                        dengan instansi/pihak terkait)</td>
                    <td rowspan="4">22</td>
                    <td>Dokumen MoU atau dokumen kerjasama lainnya antara Sekolah dengan mitra
                        {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[32] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[32] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[52] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3"> <br><br></td>
                    <td rowspan="3">· ≥ 5 jejaring</td>
                    <td>Dokumen tertulis (undangan, notulensi pertemuan, serah terima bantuan
                        dan
                        dokumen terkait lainnya) {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[33] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[33] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[53] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Dokumentasi (foto dan/atau video) pertemuan, rapat yang dilakukan {1}
                    </td>
                    <td>{{ $data->NilaiKuisoner->Status2[34] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[34] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[54] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Tauatan dari group jejaring kerja dan komunikasi di media social {1}
                    </td>
                    <td>{{ $data->NilaiKuisoner->Status2[35] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[35] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[55] ?? '' }}</td>
                </tr>
                <tr>
                    <td>4. Kampanye dan publikasi Gerakan PBLHS</td>
                    <td>1) Jumlah kegiatan kampanye dan publikasi Gerakan PBLHS</td>
                    <td rowspan="2">23</td>
                    <td>Dokumen tertulis (undangan, brosur, leaflet dll) {1/2/3}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[36] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[36] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[56] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3"> <br><br></td>
                    <td>· ≥ 5 kegiatan</td>
                    <td>Dokumentasi kampanye yang menunjukkan jumlah dan materi kegiatan.
                        Dokumentasi
                        dapat berupa foto dan/atau video (bisa dalam bentuk tautan) {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[37] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[37] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[57] ?? '' }}</td>
                </tr>
                <tr>
                    <td>2) Jumlah media publikasi</td>
                    <td rowspan="2">24</td>
                    <td rowspan="2">Media publikasi (majalah dinding, poster,
                        slogan, bulletin/majalah sekolah,
                        website/blog/fanpage sekolah, pameran, media sosial, media cetak, media
                        elektronik dan
                        media lainnya) yang memuat materi kampanye Gerakan PBLHS {1/2/3}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Status2[38] ?? '' }}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Bobot2[38] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[58] ?? '' }}</td>
                </tr>
                <tr>
                    <td>· ≥ 5 media</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[59] ?? '' }}</td>
                </tr>
                <tr>
                    <td>5. Membentuk dan memberdayakan kader adiwiyata</td>
                    <td>1) % kader adiwiyata yang dibentuk</td>
                    <td rowspan="2">25</td>
                    <td rowspan="2">Surat undangan, poster, dan dokumen tertulis terkait dengan
                        kegiatan
                        pemberdayaan Kader Adiwiyata {1/2/3/4}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Status2[39] ?? '' }}</td>
                    <td rowspan="2">{{ $data->NilaiKuisoner->Bobot2[39] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[60] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3"> <br><br></td>
                    <td>· &gt; 20 %</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[61] ?? '' }}</td>
                </tr>
                <tr>
                    <td>2) Jumlah kegiatan pemberdayaan kader adiwiyata</td>
                    <td rowspan="2">26</td>
                    <td>Dokumen pembagian tugas atau rencana aksi Kader Adiwiyata {1/2/3/4}
                    </td>
                    <td>{{ $data->NilaiKuisoner->Status2[40] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[40] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[62] ?? '' }}</td>
                </tr>
                <tr>
                    <td>· ≥ 5 kegiatan</td>
                    <td>Dokumentasi (foto dan/atau video) kegiatan pemberdayaan Kader Adiwiyata
                        {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status2[41] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot2[41] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[63] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Pemantauan dan Evaluasi Gerakan PBLHS</td>
                    <td>1. Melaksanakan pemantauan dan evaluasi pelaksanaan Gerakan PBLHS</td>
                    <td>1) Frekuensi pelaksanaan pemantauan dan evaluasi</td>
                    <td rowspan="2">27</td>
                    <td>Tabel setiap pemantauan dan evaluasi pelaksanaan Gerakan PBLHS yang
                        ditandatangani oleh kepala sekolah. {1/2/3/4}</td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td rowspan="8">{{ $data->NilaiKuisoner->Total3[0] ?? '' }}</td>
                    <td rowspan="8">{{ $data->NilaiKuisoner->Nilai3[0] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[64] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="7"> <br><br><br><br><br><br></td>
                    <td rowspan="3"> <br><br></td>
                    <td>· 3 kali dalam 1 tahun</td>
                    <td>Tabel dicantumkan periode pemantauan (di atas tabel). Apabila dalam 1
                        tahun dilakukan 3 kali pemantauan dan evaluasi, maka table pemantauan
                        berjumlah
                        3. Contoh: Pemantauan dan Evaluasi Pelaksanaan Gerakan PBLHS Januari
                        s.d.
                        Maret 2019</td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                        {{ $data->NilaiKuisoner->Catatan[65] ?? '' }}
                    </td>
                </tr>
                <tr>
                    <td>2) % rencana kegiatan Gerakan PBLHS yang terlaksana</td>
                    <td rowspan="2">28</td>
                    <td>Tabel rencana Gerakan PBLHS yang ditandatangani oleh kepala sekolah
                        {1/2}</td>
                    <td>{{ $data->NilaiKuisoner->Status3[0] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot3[0] ?? '' }}</td>
                    <td>
                        {{ $data->NilaiKuisoner->Catatan[66] ?? '' }}
                    </td>
                </tr>
                <tr>
                    <td>· &gt; 80 %</td>
                    <td>Dokumentasi (foto dan/atau video) setiap pemantauan dan evaluasi
                        pelaksanaan
                        Gerakan PBLHS {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status3[1] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot3[1] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[67] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="4">2. Pemantauan dan evaluasi melibatkan kepala sekolah, dewan
                        pendidik,
                        komite sekolah, peserta didik dan masyarakat</td>
                    <td>Pemantauan dan evaluasi melibatkan para pihak</td>
                    <td rowspan="4">29</td>
                    <td>Tabel setiap pemantauan dan evaluasi pelaksanaan Gerakan PBLHS yang
                        disusun
                        oleh Tim Adiwiyata Sekolah {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status3[2] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot3[2] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[68] ?? '' }}</td>
                </tr>
                <tr>
                    <td rowspan="3">· Melibatkan kepala sekolah, dewan pendidik, komite
                        sekolah, peserta didik
                        dan masyarakat</td>
                    <td>Dokumentasi (foto dan/atau video) pelibatan para pihak {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status3[3] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot3[3] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[69] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Undangan, daftar hadir, dan notulensi pelibatan para pihak {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status3[4] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot3[4] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[70] ?? '' }}</td>
                </tr>
                <tr>
                    <td>Tabel setiap pemantauan dan evaluasi pelaksanaan Gerakan PBLHS yang
                        ditandatangani oleh
                        kepala sekolah {1}</td>
                    <td>{{ $data->NilaiKuisoner->Status3[5] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Bobot3[5] ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[71] ?? '' }}</td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td colspan="3">Nilai Kuanta Total</td>
                    <td>
                    </td>
                    <td>{{ $data->NilaiKuisoner->TotalAkhir ?? '' }}</td>
                    <td>{{ $data->NilaiKuisoner->Catatan[72] ?? '' }}</td>
                </tr>
            </tbody>
        </table>

    </div>
</body>

</html>
