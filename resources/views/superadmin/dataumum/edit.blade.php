@extends('welcome')

@section('content')
<br /><br />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>

            </div>
            <form method="POST" action="/superadmin/dataumum/edit/{{$data->id}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Anggaran</label>
                        <input type="text" name="tahun" class="form-control" value="{{$data->tahun}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Sekolah</label>
                        <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NPSN</label>
                        <input type="text" name="npsn" class="form-control" value="{{$data->npsn}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NSS</label>
                        <input type="text" name="nss" class="form-control" value="{{$data->nss}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Siswa</label>
                        <input type="text" name="jumlah" class="form-control" value="{{$data->jumlah}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">telp</label>
                        <input type="text" name="telp" class="form-control" value="{{$data->telp}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">desa</label>
                        <input type="text" name="desa" class="form-control" value="{{$data->desa}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" value="{{$data->kecamatan}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kabupaten</label>
                        <input type="text" name="kabupaten" class="form-control" value="{{$data->kabupaten}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">provinsi</label>
                        <input type="text" name="provinsi" class="form-control" value="{{$data->provinsi}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama kepsek</label>
                        <input type="text" name="nama_kepsek" class="form-control" value="{{$data->nama_kepsek}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nip kepsek</label>
                        <input type="text" name="nip_kepsek" class="form-control" value="{{$data->nip_kepsek}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ketua Komite</label>
                        <input type="text" name="nama_ketua" class="form-control" value="{{$data->nama_ketua}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama bendahara</label>
                        <input type="text" name="nama_bendahara" class="form-control" value="{{$data->nama_bendahara}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nip bendahara</label>
                        <input type="text" name="nip_bendahara" class="form-control" value="{{$data->nip_bendahara}}"
                            required>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/superadmin/dataumum" class="btn btn-danger">Kembali</a>
                </div>
            </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection
@push('js')
<script>
    $(document).ready(function () {
    const triwulanOptions = {
    "1": ["1", "2"],
    "2": ["3", "4"]
    };

    const bulanOptions = {
    "1": ["Januari", "Februari", "Maret"],
    "2": ["April", "Mei", "Juni"],
    "3": ["Juli", "Agustus", "September"],
    "4": ["Oktober", "November", "Desember"]
    };

    $("#semester").change(function () {
    let semesterVal = $(this).val();
    $("#triwulan").html('<option value="">-triwulan-</option>');
    $("#bulan").html('<option value="">-bulan-</option>');

    if (semesterVal) {
    triwulanOptions[semesterVal].forEach(function (triwulan) {
    $("#triwulan").append('<option value="' + triwulan + '">' + triwulan + '</option>');
    });
    }
    });

    $("#triwulan").change(function () {
    let triwulanVal = $(this).val();
    $("#bulan").html('<option value="">-bulan-</option>');

    if (triwulanVal) {
    bulanOptions[triwulanVal].forEach(function (bulan) {
    $("#bulan").append('<option value="' + bulan + '">' + bulan + '</option>');
    });
    }
    });
    });
</script>
@endpush