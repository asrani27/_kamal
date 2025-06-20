<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>

    <table width="100%">
        <tr>
            <td width="15%">
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('logo/tw.png'))) }}"
                    width="100px">
            </td>
            <td style="text-align: center;" width="60%">

                <font size="24px"><b>APLIKASI SISTEM INFORMASI MANAJEMEN<br />
                        DANA BOS</b></font>

            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">LAPORAN DATA TRANSAKSI
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>No Bukti</th>
            <th>Uraian</th>
            <th>Komponen</th>
            <th>Pembiayaan</th>
            <th>Program</th>
            <th>Jumlah</th>
            <th>Jenis Transaksi</th>
            <th>Data Umum</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
            <td>{{$item->nomor}}</td>
            <td>{{$item->uraian}}</td>
            <td>{{$item->komponen == null ? '': $item->komponen->nama}}</td>
            <td>{{$item->pembiayaan == null ? '': $item->pembiayaan->nama}}</td>
            <td>{{$item->program == null ? '': $item->program->nama}}</td>
            <td>{{number_format($item->jumlah)}}</td>
            <td>{{$item->jenis}}</td>
            <td>{{$item->dataumum == null ? '': $item->dataumum->nama}}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br />Mengetahui, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br />
                Admin<br /><br /><br /><br />

                <u>-</u><br />
                NIP.xxxxxxxxx
            </td>
        </tr>
    </table>
</body>

</html>