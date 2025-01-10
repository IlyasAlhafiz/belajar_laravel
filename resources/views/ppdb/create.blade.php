@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($ppdb) ? 'Edit ppdb' : 'Tambah ppdb' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ppdb.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($ppdb))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki">Laki-laki</input>
                            <input type="radio" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin" value="perempuan">Perempuan</input>
                        </div>
                        <div class="form-group mb-3">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control" id="agama" name="agama" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="telepon">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
