<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- TITLE -->
    <title>Pemerintah Kota Jambi Satuan Polisi Pamong Praja</title>
    <!-- ok -->
    <link href="{{ asset('backend') }}/dist/css/1.css" rel="stylesheet" />
    <link href="{{ asset('css/2.css') }}" rel="stylesheet">
    <!-- HEADER -->
</head>

<body onload="window.print()">
    <table border="0" style="width: 100%">
        <!-- <tbody> -->
        <tr>
            <td class="auto-style1" rowspan="3" width="101">
                <img alt="" height="100" src="{{ asset('backend') }}/koja.jpg" width="100">
            </td>

            <td class="auto-style1">
                <center>
                    <h2 class="auto-style1">Satuan Polisi Pamong Praja Kota Jambi</h2>
                    {{-- <br> --}}
                    {{-- <h4>ss</h4> --}}
                </center>
            </td>

            <td class="auto-style1" rowspan="3" width="101">
                <img alt="" height="100" src="{{ asset('backend') }}/logpol.png" width="100">
            </td>
        </tr>

        {{-- <tr>
            <td class="auto-style2">
                <center>
                    <strong>LAPORAN

                        ADMIN
                    </strong>
                </center>
            </td>
        </tr> --}}
        {{-- <tr>
            <center>
                <td class="auto-style2">Jln. Jendral Basuki Rahmat Kota Baru</td>
            </center>
        </tr> --}}
        </tbody>
    </table>
    <!-- HEADER -->

    <!-- BODY -->
    <center> Jln. Jendral Basuki Rahmat Kota Baru</center>
    {{-- <center> Cetak Berdasarkan <b>tanggal_bayar</b> Dari Tanggal <b>04 Juli 2022</b> s/d <b>14 Juli 2022</b></center> --}}
    <table width="100%" class="tblcms2">
        <tbody>
            <tr>
                <th class="th_border cell">No</th>
                <!--h <th class="th_border cell">Id Admin </th> h-->
                <th align="center" class="th_border cell">Tanggal Lapor </th>
                <th align="center" class="th_border cell">Pelapor</th>
                <th align="center" class="th_border cell">Jenis Lapor </th>
                <th align="center" class="th_border cell">Laporan Kejadian </th>
                <th align="center" class="th_border cell">Lokasi </th>
            </tr>

        </tbody>
        <tbody>
            @foreach ($all as $row)
                <tr class="event2">
                    <td align="center" width="50">{{ $loop->iteration }}</td>
                    <!--h <td align="center">adm001</td> h-->
                    <td align="center">{{ $row->user->name }}</td>
                    <td align="center">{{ $row->tgl_adu }}</td>
                    <td align="center">{{ $row->jenis }}</td>
                    <td align="center">{{ $row->isi }}</td>
                    <td align="center">{{ $row->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- BODY -->
    <!-- FOOTER -->
    <table style="border: none;">
        <tbody>
            <tr>
                <td style="text-align: center;">
                    <p>KEPALA SATUAN POLISI PAMONG PRAJA <br>
                        KOTA JAMBI
                    </p>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </p>
                    <p>MUSTARI AFFANDI AP,ME</p>
                    <p>NIP. 19750816 199311 1 001</p>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;">
                    <p>Jambi, {{ $tgl['now'] }}</p>
                    <p>TTD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </p>
                    <p>Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</p>
                    <p></p>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>
