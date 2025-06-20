@extends('welcome')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>

            </div>
            <form method="POST" action="/superadmin/transaksi/edit/{{$data->id}}">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <input type="date" name="tanggal" value="{{$data->tanggal}}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">No Bukti</label>
                        <input type="text" name="nomor" class="form-control" value="{{$data->nomor}}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Uraian</label>
                        <input type="text" name="uraian" class="form-control" value="{{$data->uraian}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Data Umum</label>
                        <select class="form-control" name="dataumum_id">
                            @foreach ($dataumum as $item)
                            <option value="{{$item->id}}" {{$data->dataumum_id == $item->id ?
                                'selected':''}}>{{$item->nama}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Komponen</label>
                        <select class="form-control" name="komponen_id">
                            @foreach ($komponen as $item)
                            <option value="{{$item->id}}" {{$data->komponen_id == $item->id ?
                                'selected':''}}>{{$item->nama}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pembiayaan</label>
                        <select class="form-control" name="pembiayaan_id">
                            @foreach ($pembiayaan as $item)
                            <option value="{{$item->id}}" {{$data->pembiayaan_id == $item->id ?
                                'selected':''}}>{{$item->nama}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Program</label>
                        <select class="form-control" name="program_id">
                            @foreach ($program as $item)
                            <option value="{{$item->id}}" {{$data->program_id == $item->id ?
                                'selected':''}}>{{$item->nama}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" value="{{$data->jumlah}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis</label>
                        <input type="text" name="jenis" class="form-control" value="{{$data->jenis}}" required>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/superadmin/transaksi" class="btn btn-danger">Kembali</a>
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