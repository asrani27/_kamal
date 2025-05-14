@extends('welcome')

@section('content')
<br /><br />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data transaksi</h3>

                <div class="card-tools">
                    <a href="/superadmin/transaksi/add" class='btn btn-sm btn-primary'>Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap table-sm table-bordered">
                    <thead class="bg-primary">
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:14px">
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
                            <td class="text-right">

                                <a href="/superadmin/transaksi/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/superadmin/transaksi/delete/{{$item->id}}" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection