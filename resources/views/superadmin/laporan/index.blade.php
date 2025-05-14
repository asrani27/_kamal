@extends('welcome')

@section('content')
<br /><br />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Laporan</h3>

                <div class="card-tools">

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <form method="get" action="/laporan/pilih" target="_blank">
                    @csrf

                    <select class="form-control" name="jenis" required>
                        <option value="">-pilih-</option>
                        <option value="1">Data Umum</option>
                        <option value="2">Komponen</option>
                        <option value="3">Program</option>
                        <option value="4">Pembiayaan</option>
                        <option value="5">Transaksi</option>
                    </select>
                    <br />
                    <button type="submit" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-print"></i>
                        Print View</button>

                </form>

            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection