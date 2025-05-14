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
    <h3 style="text-align: center">LAPORAN DATA UMUM PENERIMA DANA BOS
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Nama Sekolah</th>
            <th>NPSN</th>
            <th>NSS</th>
            <th>Jumlah Siswa</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>Kabupaten</th>
            <th>Provinsi</th>
            <th>NIP & Nama Kepsek</th>
            <th>Nama Ketua Komite</th>
            <th>Nama & NIP Bendahara</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->tahun}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->npsn}}</td>
            <td>{{$item->nss}}</td>
            <td>{{$item->jumlah}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->telp}}</td>
            <td>{{$item->desa}}</td>
            <td>{{$item->kecamatan}}</td>
            <td>{{$item->kabupaten}}</td>
            <td>{{$item->provinsi}}</td>
            <td>{{$item->nama_kepsek}} <br />{{$item->nip_kepsek}}</td>
            <td>{{$item->nama_ketua}}</td>
            <td>{{$item->nama_bendahara}} <br />{{$item->nip_bendahara}}</td>
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