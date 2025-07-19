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
            font-weight: bold;
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
                <td><select name="Status1[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status1[0]) && $data->Status1[0] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status1[0]) && $data->Status1[0] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status1[0]) && $data->Status1[0] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td>

                    <select name="Bobot1[]" onchange="calculateTotal()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot1[0]) && $data->Bobot1[0] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot1[0]) && $data->Bobot1[0] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot1[0]) && $data->Bobot1[0] == 2 ? 'selected' : '' }}>2</option>
                    </select>
                </td>
                <td rowspan="13"><input type="text" class="form-control" name="Total1[]" id="Total1"
                        value="{{$data->Total1[0] ?? ''}}">
                </td>
                <td rowspan="13"><input type="text" class="form-control" name="Nilai1[]" id="Nilai1"
                        value="{{$data->Nilai1[0] ?? ''}}">
                </td>
                <td><textarea name="Catatan[]" cols="4"></textarea></td>
            </tr>
            <tr>
                <td rowspan="12"> <br><br><br><br><br><br><br><br><br><br><br></td>
                <td rowspan="3"> <br><br></td>
                <td rowspan="3">Sesuai dengan Laporan EDS dan hasil IPMLH {3}</td>
                <td>Dokumentasi proses EDS {1/2}</td>
                <td><select name="Status1[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status1[1]) && $data->Status1[1] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status1[1]) && $data->Status1[1] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status1[1]) && $data->Status1[1] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot1[]" onchange="calculateTotal()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot1[1]) && $data->Bobot1[1] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot1[1]) && $data->Bobot1[1] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot1[1]) && $data->Bobot1[1] == 2 ? 'selected' : '' }}>2</option>
                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>Laporan EDS yang terkait lingkungan hidup {1/2}</td>
                <td><select name="Status1[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status1[2]) && $data->Status1[2] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status1[2]) && $data->Status1[2] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status1[2]) && $data->Status1[2] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot1[]" onchange="calculateTotal()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot1[2]) && $data->Bobot1[2] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot1[2]) && $data->Bobot1[2] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot1[2]) && $data->Bobot1[2] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>Tabel rencana Gerakan PBLHS {1/2}</td>
                <td><select name="Status1[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status1[3]) && $data->Status1[3] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status1[3]) && $data->Status1[3] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status1[3]) && $data->Status1[3] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot1[]" onchange="calculateTotal()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot1[3]) && $data->Bobot1[3] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot1[3]) && $data->Bobot1[3] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot1[3]) && $data->Bobot1[3] == 2 ? 'selected' : '' }}>2</option>
                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>2. Penyusunan Rencana Gerakan PBLHS melibatkan kepala sekolah, dewan
                    pendidik, komite
                    sekolah, peserta didik dan masyarakat</td>
                <td>Pihak yang terlibat dalam penyusunan dokumen Rencana Gerakan PBLHS</td>
                <td rowspan="3">2</td>
                <td>Undangan, daftar hadir, notulensi rapat {1/2}</td>
                <td><select name="Status1[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status1[4]) && $data->Status1[4] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status1[4]) && $data->Status1[4] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status1[4]) && $data->Status1[4] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot1[]" onchange="calculateTotal()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot1[4]) && $data->Bobot1[4] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot1[4]) && $data->Bobot1[4] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot1[4]) && $data->Bobot1[4] == 2 ? 'selected' : '' }}>2</option>
                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td rowspan="2"> <br></td>
                <td rowspan="2">Kepala sekolah, dewan pendidik, dan komite sekolah {1}</td>
                <td>Rencana Gerakan PBLHS yang disetujui kepala sekolah, dewan pendidik,
                    komite
                    sekolah, peserta didik, dan masyarakat {1/2}</td>
                <td><select name="Status1[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status1[5]) && $data->Status1[5] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status1[5]) && $data->Status1[5] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status1[5]) && $data->Status1[5] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot1[]" onchange="calculateTotal()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot1[5]) && $data->Bobot1[5] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot1[5]) && $data->Bobot1[5] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot1[5]) && $data->Bobot1[5] == 2 ? 'selected' : '' }}>2</option>
                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>Dokumentasi (foto dan/atau video) {1}</td>
                <td><select name="Status1[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status1[6]) && $data->Status1[6] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status1[6]) && $data->Status1[6] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status1[6]) && $data->Status1[6] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot1[]" onchange="calculateTotal()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot1[6]) && $data->Bobot1[6] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot1[6]) && $data->Bobot1[6] == 1 ? 'selected' : '' }}>1</option>
                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>3. Rencana Gerakan PBLHS terintegrasi dalam dokumen satu KTSP</td>
                <td>Dokumen Satu KTSP (visi, misi, tujuan sekolah dan program pengembangan
                    diri)
                    yang membuat rencana Gerakan PBLHS</td>
                <td rowspan="2">3</td>
                <td>Dokumen Satu KTSP yang sudah ditandatangani oleh kepala sekolah dan
                    komite
                    sekolah, dan disahkan pejabat yang berwenang (2 tahun terakhir) {1/2}
                </td>
                <td><select name="Status1[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status1[7]) && $data->Status1[7] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status1[7]) && $data->Status1[7] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status1[7]) && $data->Status1[7] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot1[]" onchange="calculateTotal()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot1[7]) && $data->Bobot1[7] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot1[7]) && $data->Bobot1[7] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot1[7]) && $data->Bobot1[7] == 2 ? 'selected' : '' }}>2</option>
                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
                <td>Visi, misi, tujuan sekolah dan program pengembangan diri {3}</td>
                <td>Program ekstrakurikuler dan pembiasaan diri {1/2}</td>
                <td><select name="Status1[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status1[8]) && $data->Status1[8] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status1[8]) && $data->Status1[8] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status1[8]) && $data->Status1[8] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot1[]" onchange="calculateTotal()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot1[8]) && $data->Bobot1[8] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot1[8]) && $data->Bobot1[8] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot1[8]) && $data->Bobot1[8] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>4. Rencana Gerakan PBLHS terintegrasi dalam RPP</td>
                <td>a. Jumlah aspek penerapan PRLH yang diintegrasi dalam RPP</td>
                <td rowspan="2">4</td>
                <td> </td>
                <td> </td>
                <td></td>
                <td> </td>
            </tr>
            <tr>
                <td rowspan="3"> <br><br></td>
                <td>≥ 5 aspek {5}</td>
                <td rowspan="3">Profil sekolah dan semua RPP yang memuat aspek penerapan
                    PRLH yng sudah
                    disahkan oleh kepala sekolah dan ditandatangani oleh pendidik pengampu
                    (2
                    tahun terakhir) {1/2}</td>
                <td rowspan="3"><select name="Status1[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status1[9]) && $data->Status1[9] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status1[9]) && $data->Status1[9] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status1[9]) && $data->Status1[9] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td rowspan="3"><select name="Bobot1[]" onchange="calculateTotal()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot1[9]) && $data->Bobot1[9] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot1[9]) && $data->Bobot1[9] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot1[9]) && $data->Bobot1[9] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
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
                <td>Pelaksanaan gerakan PBLHS</td>
                <td colspan="6">Pembelajaran pada mata pelajaran, ekstrakurikuler dan
                    pembiasaan diri
                    yang mengintegrasikan penerapan PRLH di Sekolah</td>
                <td rowspan="52"><input type="text" class="form-control" name="Total2[]" id="Total2"
                        value="{{$data->Total2[0]}}">
                </td>
                <td rowspan="52"><input type="text" class="form-control" name="Nilai2[]" id="Nilai2"
                        value="{{$data->Nilai2[0]}}">
                </td>
                <td> </td>
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
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[0]) && $data->Status2[0] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[0]) && $data->Status2[0] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[0]) && $data->Status2[0] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[0]) && $data->Bobot2[0] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[0]) && $data->Bobot2[0] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[0]) && $data->Bobot2[0] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td rowspan="7"> <br><br><br><br><br><br></td>
                <td rowspan="3">≤ 1 unsur utama {1}</td>
                <td>Daftar piket kelas {1/2}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[1]) && $data->Status2[1] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[1]) && $data->Status2[1] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[1]) && $data->Status2[1] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[1]) && $data->Bobot2[1] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[1]) && $data->Bobot2[1] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[1]) && $data->Bobot2[1] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>Dokumentasi hasil praktek/penugasan/penelitian kebersihan, fungsi
                    sanitasi dan drainase
                    sekolah {1}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[2]) && $data->Status2[2] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[2]) && $data->Status2[2] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[2]) && $data->Status2[2] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[2]) && $data->Bobot2[2] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[2]) && $data->Bobot2[2] == 1 ? 'selected' : '' }}>1</option>
                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>SK Tim/pokja kebersihan, fungsi sanitasi dan drainase sekolah {1/2/3}
                </td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[3]) && $data->Status2[3] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[3]) && $data->Status2[3] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[3]) && $data->Status2[3] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[3]) && $data->Bobot2[3] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[3]) && $data->Bobot2[3] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[3]) && $data->Bobot2[3] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[3]) && $data->Bobot2[3] == 3 ? 'selected' : '' }}>3</option>
                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>2) Jumlah upaya pemeliharaan kebersihan, fungsi sanitasi dan drainase
                    sekolah</td>
                <td rowspan="2">7</td>
                <td>Buku monitoring/ceklis kegiatan memelihara kebersihan, fungsi sanitasi
                    dan drainase sekolah {1/2/3}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[4]) && $data->Status2[4] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[4]) && $data->Status2[4] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[4]) && $data->Status2[4] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[4]) && $data->Bobot2[4] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[4]) && $data->Bobot2[4] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[4]) && $data->Bobot2[4] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[4]) && $data->Bobot2[4] == 3 ? 'selected' : '' }}>3</option>
                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>≥ 7 upaya {5}</td>
                <td>Dokumentasi (foto dan/atau video) kegiatan memelihara kebersihan,
                    fungsi sanitasi
                    dan drainase sekolah {1}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[5]) && $data->Status2[5] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[5]) && $data->Status2[5] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[5]) && $data->Status2[5] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[5]) && $data->Bobot2[5] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[5]) && $data->Bobot2[5] == 1 ? 'selected' : '' }}>1</option>


                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>3) Terpeliharanya kebersihan, fungsi sanitasi dan drainase sekolah</td>
                <td rowspan="2">8</td>
                <td rowspan="2">Dokumentasi (foto dan/atau video) kegiatan memelihara
                    kebersihan, fungsi
                    sanitasi dan drainase sekolah sebelum dan setelah pelaksanaan Gerakan
                    PBLHS {1}</td>
                <td rowspan="2"><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[6]) && $data->Status2[6] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[6]) && $data->Status2[6] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[6]) && $data->Status2[6] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td rowspan="2"><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[6]) && $data->Bobot2[6] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[6]) && $data->Bobot2[6] == 1 ? 'selected' : '' }}>1</option>


                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>Sekolah bersih, sanitasi dan drainase berfungsi {3}</td>
                <td> </td>
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
                <td rowspan="2"><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[7]) && $data->Status2[7] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[7]) && $data->Status2[7] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[7]) && $data->Status2[7] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td rowspan="2"><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[7]) && $data->Bobot2[7] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[7]) && $data->Bobot2[7] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[7]) && $data->Bobot2[7] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td rowspan="8"> <br><br><br><br><br><br><br></td>
                <td>≥ 7 upaya {5}</td>
                <td> </td>
            </tr>
            <tr>
                <td>2) Jumlah upaya daur ulang sampah</td>
                <td rowspan="2">10</td>
                <td>Bukti penyerahan sampah kepada pihak ketiga untuk didaur ulang {1/2/3}
                </td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[8]) && $data->Status2[8] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[8]) && $data->Status2[8] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[8]) && $data->Status2[8] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[8]) && $data->Bobot2[8] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[8]) && $data->Bobot2[8] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[8]) && $data->Bobot2[8] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[8]) && $data->Bobot2[8] == 3 ? 'selected' : '' }}>3</option>

                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>≥ 3 upaya {3}</td>
                <td>Daftar dan dokumentasi (foto dan/atau video) upaya pengurangan,
                    penggunaan
                    kembali dan daur ulang sampah {1/2}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[9]) && $data->Status2[9] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[9]) && $data->Status2[9] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[9]) && $data->Status2[9] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[9]) && $data->Bobot2[9] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[9]) && $data->Bobot2[9] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[9]) && $data->Bobot2[9] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td> </td>
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
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[10]) && $data->Status2[10] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[10]) && $data->Status2[10] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[10]) && $data->Status2[10] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[10]) && $data->Bobot2[10] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[10]) && $data->Bobot2[10] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[10]) && $data->Bobot2[10] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td rowspan="2">Peserta didik dan kader adiwiyata {3}</td>
                <td>SOP pemindahan sampah yang menunjukkan keterlibatan peserta didik dan
                    kader Adiwiyata {1/2/3}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[11]) && $data->Status2[11] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[11]) && $data->Status2[11] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[11]) && $data->Status2[11] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[11]) && $data->Bobot2[11] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[11]) && $data->Bobot2[11] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[11]) && $data->Bobot2[11] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[11]) && $data->Bobot2[11] == 3 ? 'selected' : '' }}>3</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>Dokumentasi (foto dan/atau video) keterlibatan peserta didik dan kader
                    Adiwiyata dalam
                    kegiatan pemindahan sampah dari sumber ke tempat pengelolaan sampah di
                    Sekolah {1/2}
                </td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[12]) && $data->Status2[12] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[12]) && $data->Status2[12] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[12]) && $data->Status2[12] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[12]) && $data->Bobot2[12] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[12]) && $data->Bobot2[12] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[12]) && $data->Bobot2[12] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td></td>

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
                <td rowspan="2"><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[13]) && $data->Status2[13] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[13]) && $data->Status2[13] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[13]) && $data->Status2[13] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td rowspan="2"><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[13]) && $data->Bobot2[13] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[13]) && $data->Bobot2[13] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[13]) && $data->Bobot2[13] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>&gt; 80% {5}</td>
                <td></td>

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
                <td rowspan="2"><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[14]) && $data->Status2[14] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[14]) && $data->Status2[14] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[14]) && $data->Status2[14] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td rowspan="2"><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[14]) && $data->Bobot2[14] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[14]) && $data->Bobot2[14] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[14]) && $data->Bobot2[14] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td rowspan="5"> <br><br><br><br></td>
                <td>Penanaman dan pemeliharaan {2}</td>
                <td></td>

            </tr>
            <tr>
                <td>2) Jumlah unsur warga sekolah yang berpartisipasi dalam kegiatan
                    penanaman,
                    pemeliharaan dan pembibitan pohon/tanaman</td>
                <td rowspan="2">14</td>
                <td rowspan="2">Profil sekolah {1/2/3}</td>
                <td rowspan="2"><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[15]) && $data->Status2[15] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[15]) && $data->Status2[15] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[15]) && $data->Status2[15] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td rowspan="2"><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[15]) && $data->Bobot2[15] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[15]) && $data->Bobot2[15] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[15]) && $data->Bobot2[15] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[15]) && $data->Bobot2[15] == 3 ? 'selected' : '' }}>3</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>· ≥ 5 unsur {5}</td>
                <td></td>

            </tr>
            <tr>
                <td>3) Jumlah pohon/tanaman yang ditanam dan dipelihara</td>
                <td rowspan="2">15</td>
                <td>Dokumentasi hasil praktek/penugasan/penelitian kegiatan penanaman,
                    pemeliharaan
                    dan pembibitan baik pada mapel maupun ekstrakurikuler {1/2}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[16]) && $data->Status2[16] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[16]) && $data->Status2[16] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[16]) && $data->Status2[16] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[16]) && $data->Bobot2[16] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[16]) && $data->Bobot2[16] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[16]) && $data->Bobot2[16] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>&gt; 60% - 80% {4}</td>
                <td>Buku monitoring/cek list kegiatan penanaman, pemeliharaan dan
                    pembibitan
                    tanaman {1/2/3/4/5}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[17]) && $data->Status2[17] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[17]) && $data->Status2[17] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[17]) && $data->Status2[17] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[17]) && $data->Bobot2[17] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[17]) && $data->Bobot2[17] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[17]) && $data->Bobot2[17] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[17]) && $data->Bobot2[17] == 3 ? 'selected' : '' }}>3</option>
                        <option value="4" {{ isset($data) && isset($data->Bobot2[17]) && $data->Bobot2[17] == 4 ? 'selected' : '' }}>4</option>
                        <option value="5" {{ isset($data) && isset($data->Bobot2[17]) && $data->Bobot2[17] == 5 ? 'selected' : '' }}>5</option>
                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>d. Konservasi Air</td>
                <td>Jumlah upaya konservasi air</td>
                <td rowspan="2">16</td>
                <td>Dokumentasi hasil praktek/penugasan/penelitian kegiatan konservasi air
                    {1/2/3}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[18]) && $data->Status2[18] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[18]) && $data->Status2[18] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[18]) && $data->Status2[18] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[18]) && $data->Bobot2[18] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[18]) && $data->Bobot2[18] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[18]) && $data->Bobot2[18] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[18]) && $data->Bobot2[18] == 3 ? 'selected' : '' }}>3</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td> </td>
                <td>≥ 7 upaya {5}</td>
                <td>Dokumentasi (foto dan/atau video) yang menunjukkan kegiatan konservasi
                    air yang
                    dilakukan sekolah {1/2}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[19]) && $data->Status2[19] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[19]) && $data->Status2[19] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[19]) && $data->Status2[19] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[19]) && $data->Bobot2[19] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[19]) && $data->Bobot2[19] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[19]) && $data->Bobot2[19] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>e. Konservasi Energi</td>
                <td>Jumlah upaya konservasi energi</td>
                <td rowspan="4">17</td>
                <td>Aturan/tata tertib perilaku penghematan energi {1/2}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[20]) && $data->Status2[20] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[20]) && $data->Status2[20] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[20]) && $data->Status2[20] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[20]) && $data->Bobot2[20] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[20]) && $data->Bobot2[20] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[20]) && $data->Bobot2[20] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td rowspan="3"> <br><br></td>
                <td rowspan="3">≥ 7 upaya {5}</td>
                <td>Dokumentasi (foto dan/atau video) kegiatan konservasi energi {1}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[21]) && $data->Status2[21] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[21]) && $data->Status2[21] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[21]) && $data->Status2[21] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[21]) && $data->Bobot2[21] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[21]) && $data->Bobot2[21] == 1 ? 'selected' : '' }}>1</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>Dokumentasi (foto dan/atau video) instalasi dan peralatan elektronik
                    hemat energi {1}
                </td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[22]) && $data->Status2[22] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[22]) && $data->Status2[22] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[22]) && $data->Status2[22] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[22]) && $data->Bobot2[22] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[22]) && $data->Bobot2[22] == 1 ? 'selected' : '' }}>1</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>Dokumentasi hasil praktek/penugasan/penelitian terkait pembangkit
                    listrik dari energi
                    terbarukan (jika ada) {1}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[23]) && $data->Status2[23] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[23]) && $data->Status2[23] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[23]) && $data->Status2[23] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[23]) && $data->Bobot2[23] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[23]) && $data->Bobot2[23] == 1 ? 'selected' : '' }}>1</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>f. Inovasi terkait penerapan PRLH lainnya berdasarkan hasil IPMLH</td>
                <td>Jumlah karya inovatif pendidik dan peserta didik</td>
                <td rowspan="4">18</td>
                <td>Dokumentasi (foto dan/atau video) kegiatan terkait dengan karya
                    inovatif dan
                    proses penemuan karya inovatif Sekolah terkait dengan penerapan PRLH
                    {1}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[24]) && $data->Status2[24] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[24]) && $data->Status2[24] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[24]) && $data->Status2[24] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[24]) && $data->Bobot2[24] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[24]) && $data->Bobot2[24] == 1 ? 'selected' : '' }}>1</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td rowspan="3"> <br><br></td>
                <td rowspan="3">· ≥ 5 karya inovatif</td>
                <td>Karya inovatif yang dihasilkan oleh Sekolah {1}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[25]) && $data->Status2[25] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[25]) && $data->Status2[25] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[25]) && $data->Status2[25] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[25]) && $data->Bobot2[25] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[25]) && $data->Bobot2[25] == 1 ? 'selected' : '' }}>1</option>
                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>Penghargaan karya inovatif terkait dengan penerapan PRLH {1}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[26]) && $data->Status2[26] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[26]) && $data->Status2[26] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[26]) && $data->Status2[26] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[26]) && $data->Bobot2[26] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[26]) && $data->Bobot2[26] == 1 ? 'selected' : '' }}>1</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>Informasi detil dan penting terkait dengan karya inovatif yang telah
                    dihasilkan Sekolah
                    dalam upaya penerapan PRLH {1}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[27]) && $data->Status2[27] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[27]) && $data->Status2[27] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[27]) && $data->Status2[27] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[27]) && $data->Bobot2[27] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[27]) && $data->Bobot2[27] == 1 ? 'selected' : '' }}>1</option>
                    </select></td>
                <td></td>

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
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[28]) && $data->Status2[28] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[28]) && $data->Status2[28] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[28]) && $data->Status2[28] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[28]) && $data->Bobot2[28] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[28]) && $data->Bobot2[28] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[28]) && $data->Bobot2[28] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[28]) && $data->Bobot2[28] == 3 ? 'selected' : '' }}>3</option>
                        <option value="4" {{ isset($data) && isset($data->Bobot2[28]) && $data->Bobot2[28] == 4 ? 'selected' : '' }}>4</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td rowspan="5"> <br><br><br><br></td>
                <td>· ≥ 4 aksi</td>
                <td>Dokumentasi (foto dan/atau video) aksi penerapan PRLH untuk dan bersama
                    masyarakat sekitar Sekolah dari berbagai sudut pengambilan gambar
                    {1/2/3}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[29]) && $data->Status2[29] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[29]) && $data->Status2[29] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[29]) && $data->Status2[29] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[29]) && $data->Bobot2[29] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[29]) && $data->Bobot2[29] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[29]) && $data->Bobot2[29] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[29]) && $data->Bobot2[29] == 3 ? 'selected' : '' }}>3</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>2) Kebersihan dan fungsi drainase di lingkungan sekitar sekolah</td>
                <td rowspan="2">20</td>
                <td rowspan="2">Dokumentasi (foto dan/atau video) kondisi kebersihan dan
                    fungsi drainase di
                    lingkungan sekitar Sekolah dari berbagai sudut pengambilan gambar {1/2}
                </td>
                <td rowspan="2"><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[30]) && $data->Status2[30] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[30]) && $data->Status2[30] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[30]) && $data->Status2[30] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td rowspan="2"><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[30]) && $data->Bobot2[30] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[30]) && $data->Bobot2[30] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[30]) && $data->Bobot2[30] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>· Lingkungan sekitar sekolah bersih dan drainase berfungsi</td>
                <td></td>

            </tr>
            <tr>
                <td>3) Pengelolaan sampah di lingkungan sekitar sekolah</td>
                <td rowspan="2">21</td>
                <td rowspan="2">Dokumentasi (foto dan/atau video) pengelolaan sampah
                    (pengurangan,
                    pemilahan, pemanfaatan kembali dan daur ulang) di lingkungan sekitar
                    Sekolah dari
                    berbagai sudut pengambilan gambar {1/2}</td>
                <td rowspan="2"><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[31]) && $data->Status2[31] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[31]) && $data->Status2[31] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[31]) && $data->Status2[31] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td rowspan="2"><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[31]) && $data->Bobot2[31] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[31]) && $data->Bobot2[31] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[31]) && $data->Bobot2[31] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>· Sampah terpilah dan terkelola dengan baik</td>
                <td></td>

            </tr>
            <tr>
                <td>3. Membentuk jejaring kerja dan komunikasi</td>
                <td>Jumlah jejaring kerja dan komunikasi (antar warga sekolah, antar
                    sekolah dan
                    dengan instansi/pihak terkait)</td>
                <td rowspan="4">22</td>
                <td>Dokumen MoU atau dokumen kerjasama lainnya antara Sekolah dengan mitra
                    {1/2}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[32]) && $data->Status2[32] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[32]) && $data->Status2[32] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[32]) && $data->Status2[32] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[32]) && $data->Bobot2[32] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[32]) && $data->Bobot2[32] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[32]) && $data->Bobot2[32] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td rowspan="3"> <br><br></td>
                <td rowspan="3">· ≥ 5 jejaring</td>
                <td>Dokumen tertulis (undangan, notulensi pertemuan, serah terima bantuan
                    dan
                    dokumen terkait lainnya) {1}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[33]) && $data->Status2[33] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[33]) && $data->Status2[33] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[33]) && $data->Status2[33] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[33]) && $data->Bobot2[33] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[33]) && $data->Bobot2[33] == 1 ? 'selected' : '' }}>1</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>Dokumentasi (foto dan/atau video) pertemuan, rapat yang dilakukan {1}
                </td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[34]) && $data->Status2[34] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[34]) && $data->Status2[34] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[34]) && $data->Status2[34] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[34]) && $data->Bobot2[34] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[34]) && $data->Bobot2[34] == 1 ? 'selected' : '' }}>1</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>Tauatan dari group jejaring kerja dan komunikasi di media social {1}
                </td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[35]) && $data->Status2[35] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[35]) && $data->Status2[35] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[35]) && $data->Status2[35] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[35]) && $data->Bobot2[35] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[35]) && $data->Bobot2[35] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[35]) && $data->Bobot2[35] == 2 ? 'selected' : '' }}>2</option>
                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>4. Kampanye dan publikasi Gerakan PBLHS</td>
                <td>1) Jumlah kegiatan kampanye dan publikasi Gerakan PBLHS</td>
                <td rowspan="2">23</td>
                <td>Dokumen tertulis (undangan, brosur, leaflet dll) {1/2/3}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[36]) && $data->Status2[36] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[36]) && $data->Status2[36] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[36]) && $data->Status2[36] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[36]) && $data->Bobot2[36] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[36]) && $data->Bobot2[36] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[36]) && $data->Bobot2[36] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[36]) && $data->Bobot2[36] == 3 ? 'selected' : '' }}>3</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td rowspan="3"> <br><br></td>
                <td>· ≥ 5 kegiatan</td>
                <td>Dokumentasi kampanye yang menunjukkan jumlah dan materi kegiatan.
                    Dokumentasi
                    dapat berupa foto dan/atau video (bisa dalam bentuk tautan) {1/2}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[37]) && $data->Status2[37] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[37]) && $data->Status2[37] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[37]) && $data->Status2[37] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[37]) && $data->Bobot2[37] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[37]) && $data->Bobot2[37] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[37]) && $data->Bobot2[37] == 2 ? 'selected' : '' }}>2</option>
                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>2) Jumlah media publikasi</td>
                <td rowspan="2">24</td>
                <td rowspan="2">Media publikasi (majalah dinding, poster,
                    slogan, bulletin/majalah sekolah,
                    website/blog/fanpage sekolah, pameran, media sosial, media cetak, media
                    elektronik dan
                    media lainnya) yang memuat materi kampanye Gerakan PBLHS {1/2/3}</td>
                <td rowspan="2"><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[38]) && $data->Status2[38] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[38]) && $data->Status2[38] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[38]) && $data->Status2[38] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td rowspan="2"><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[38]) && $data->Bobot2[38] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[38]) && $data->Bobot2[38] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[38]) && $data->Bobot2[38] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[38]) && $data->Bobot2[38] == 3 ? 'selected' : '' }}>3</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>· ≥ 5 media</td>
                <td></td>

            </tr>
            <tr>
                <td>5. Membentuk dan memberdayakan kader adiwiyata</td>
                <td>1) % kader adiwiyata yang dibentuk</td>
                <td rowspan="2">25</td>
                <td rowspan="2">Surat undangan, poster, dan dokumen tertulis terkait dengan
                    kegiatan
                    pemberdayaan Kader Adiwiyata {1/2/3/4}</td>
                <td rowspan="2"><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[39]) && $data->Status2[39] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[39]) && $data->Status2[39] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[39]) && $data->Status2[39] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td rowspan="2"><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[39]) && $data->Bobot2[39] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[39]) && $data->Bobot2[39] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[39]) && $data->Bobot2[39] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[39]) && $data->Bobot2[39] == 3 ? 'selected' : '' }}>3</option>
                        <option value="4" {{ isset($data) && isset($data->Bobot2[39]) && $data->Bobot2[39] == 4 ? 'selected' : '' }}>4</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td rowspan="3"> <br><br></td>
                <td>· &gt; 20 %</td>
                <td></td>

            </tr>
            <tr>
                <td>2) Jumlah kegiatan pemberdayaan kader adiwiyata</td>
                <td rowspan="2">26</td>
                <td>Dokumen pembagian tugas atau rencana aksi Kader Adiwiyata {1/2/3/4}
                </td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[40]) && $data->Status2[40] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[40]) && $data->Status2[40] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[40]) && $data->Status2[40] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[40]) && $data->Bobot2[40] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[40]) && $data->Bobot2[40] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[40]) && $data->Bobot2[40] == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ isset($data) && isset($data->Bobot2[40]) && $data->Bobot2[40] == 3 ? 'selected' : '' }}>3</option>
                        <option value="4" {{ isset($data) && isset($data->Bobot2[40]) && $data->Bobot2[40] == 4 ? 'selected' : '' }}>4</option>

                    </select></td>
                <td></td>

            </tr>
            <tr>
                <td>· ≥ 5 kegiatan</td>
                <td>Dokumentasi (foto dan/atau video) kegiatan pemberdayaan Kader Adiwiyata
                    {1/2}</td>
                <td><select name="Status2[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status2[41]) && $data->Status2[41] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status2[41]) && $data->Status2[41] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status2[41]) && $data->Status2[41] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot2[]" onchange="calculateTotal2()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot2[41]) && $data->Bobot2[41] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot2[41]) && $data->Bobot2[41] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot2[41]) && $data->Bobot2[41] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td></td>

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
                <td></td>
                <td rowspan="8"><input type="text" class="form-control" name="Total3[]" id="Total3"
                        value="{{$data->Total3[0]}}">
                </td>
                <td rowspan="8"><input type="text" class="form-control" name="Nilai3[]" id="Nilai3"
                        value="{{$data->Nilai3[0]}}">
                </td>
                <td> </td>
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
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td>2) % rencana kegiatan Gerakan PBLHS yang terlaksana</td>
                <td rowspan="2">28</td>
                <td>Tabel rencana Gerakan PBLHS yang ditandatangani oleh kepala sekolah
                    {1/2}</td>
                <td><select name="Status3[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status3[0]) && $data->Status3[0] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status3[0]) && $data->Status3[0] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status3[0]) && $data->Status3[0] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot3[]" onchange="calculateTotal3()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot3[0]) && $data->Bobot3[0] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot3[0]) && $data->Bobot3[0] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot3[0]) && $data->Bobot3[0] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>· &gt; 80 %</td>
                <td>Dokumentasi (foto dan/atau video) setiap pemantauan dan evaluasi
                    pelaksanaan
                    Gerakan PBLHS {1}</td>
                <td><select name="Status3[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status3[1]) && $data->Status3[1] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status3[1]) && $data->Status3[1] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status3[1]) && $data->Status3[1] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot3[]" onchange="calculateTotal3()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot3[1]) && $data->Bobot3[1] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot3[1]) && $data->Bobot3[1] == 1 ? 'selected' : '' }}>1</option>

                    </select></td>
                <td> </td>
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
                <td><select name="Status3[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status3[2]) && $data->Status3[2] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status3[2]) && $data->Status3[2] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status3[2]) && $data->Status3[2] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot3[]" onchange="calculateTotal3()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot3[2]) && $data->Bobot3[2] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot3[2]) && $data->Bobot3[2] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot3[2]) && $data->Bobot3[2] == 2 ? 'selected' : '' }}>2</option>


                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td rowspan="3">· Melibatkan kepala sekolah, dewan pendidik, komite
                    sekolah, peserta didik
                    dan masyarakat</td>
                <td>Dokumentasi (foto dan/atau video) pelibatan para pihak {1}</td>
                <td><select name="Status3[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status3[3]) && $data->Status3[3] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status3[3]) && $data->Status3[3] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status3[3]) && $data->Status3[3] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot3[]" onchange="calculateTotal3()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot3[3]) && $data->Bobot3[3] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot3[3]) && $data->Bobot3[3] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot3[3]) && $data->Bobot3[3] == 2 ? 'selected' : '' }}>2</option>


                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>Undangan, daftar hadir, dan notulensi pelibatan para pihak {1}</td>
                <td><select name="Status3[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status3[4]) && $data->Status3[4] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status3[4]) && $data->Status3[4] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status3[4]) && $data->Status3[4] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot3[]" onchange="calculateTotal3()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot3[4]) && $data->Bobot3[4] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot3[4]) && $data->Bobot3[4] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot3[4]) && $data->Bobot3[4] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td>Tabel setiap pemantauan dan evaluasi pelaksanaan Gerakan PBLHS yang
                    ditandatangani oleh
                    kepala sekolah {1}</td>
                <td><select name="Status3[]" class="multi-select">
                        <option value="" {{ isset($data) && isset($data->Status3[5]) && $data->Status3[5] == '' ? 'selected' : '' }}>Pilih
                        </option>
                        <option value="L" {{ isset($data) && isset($data->Status3[5]) && $data->Status3[5] == 'L' ? 'selected' : '' }}>Lengkap
                        </option>
                        <option value="TL" {{ isset($data) && isset($data->Status3[5]) && $data->Status3[5] == 'TL' ? 'selected' : '' }}>Tidak
                            lengkap</option>
                    </select>
                </td>
                <td><select name="Bobot3[]" onchange="calculateTotal3()" class="multi-select">
                        <option value="0" {{ isset($data) && isset($data->Bobot3[5]) && $data->Bobot3[5] == 0 ? 'selected' : '' }}>0</option>
                        <option value="1" {{ isset($data) && isset($data->Bobot3[5]) && $data->Bobot3[5] == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ isset($data) && isset($data->Bobot3[5]) && $data->Bobot3[5] == 2 ? 'selected' : '' }}>2</option>

                    </select></td>
                <td> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="3">Nilai Kuanta Total</td>
                <td></td>
                <td><input readonly type="text" class="form-control" name="TotalAkhir" id="TotalAkhir"
                        value="{{$data->TotalAkhir ?? ''}}">
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
