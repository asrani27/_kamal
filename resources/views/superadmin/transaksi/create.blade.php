@extends('welcome')

@section('content')
<br /><br />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>

            </div>
            <form method="POST" action="/superadmin/transaksi/add">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <input type="date" name="tanggal" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}"
                            class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">No Bukti</label>
                        <input type="text" name="nomor" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Uraian</label>
                        <input type="text" name="uraian" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Data Umum</label>
                        <select class="form-control" name="dataumum_id">
                            @foreach ($dataumum as $item)
                            <option value="{{$item->id}}">{{$item->nama}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Komponen</label>
                        <select class="form-control" name="komponen_id">
                            @foreach ($komponen as $item)
                            <option value="{{$item->id}}">{{$item->nama}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pembiayaan</label>
                        <select class="form-control" name="pembiayaan_id">
                            @foreach ($pembiayaan as $item)
                            <option value="{{$item->id}}">{{$item->nama}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Program</label>
                        <select class="form-control" name="program_id">
                            @foreach ($program as $item)
                            <option value="{{$item->id}}">{{$item->nama}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis</label>
                        <input type="text" name="jenis" class="form-control" required>
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

@endpush