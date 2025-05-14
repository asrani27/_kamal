@extends('welcome')

@section('content')
<br /><br />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>

            </div>
            <form method="POST" action="/superadmin/dataumum/add">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Anggaran</label>
                        <input type="text" name="tahun" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Sekolah</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NPSN</label>
                        <input type="text" name="npsn" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NSS</label>
                        <input type="text" name="nss" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Siswa</label>
                        <input type="text" name="jumlah" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">telp</label>
                        <input type="text" name="telp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">desa</label>
                        <input type="text" name="desa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kabupaten</label>
                        <input type="text" name="kabupaten" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">provinsi</label>
                        <input type="text" name="provinsi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama kepsek</label>
                        <input type="text" name="nama_kepsek" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nip kepsek</label>
                        <input type="text" name="nip_kepsek" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ketua Komite</label>
                        <input type="text" name="nama_ketua" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama bendahara</label>
                        <input type="text" name="nama_bendahara" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nip bendahara</label>
                        <input type="text" name="nip_bendahara" class="form-control" required>
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

@endpush