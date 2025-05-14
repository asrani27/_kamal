@extends('welcome')

@section('content')
<br /><br />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data umum</h3>

                <div class="card-tools">
                    <a href="/superadmin/dataumum/add" class='btn btn-sm btn-primary'>Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap table-sm table-bordered">
                    <thead class="bg-primary">
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:14px">
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
                            <td class="text-right">

                                <a href="/superadmin/dataumum/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/superadmin/dataumum/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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