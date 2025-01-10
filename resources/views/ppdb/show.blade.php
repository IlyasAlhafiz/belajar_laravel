@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($ppdb) ? 'Edit ppdb' : 'Tambah ppdb' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($ppdb))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $ppdb->nama_lengkap ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" id="jenis_kelamin_laki" name="jenis_kelamin" value="laki-laki" {{ $ppdb->jenis_kelamin == 'laki-laki' ? 'checked' : '' }} disabled>Laki-laki</input>
                            <input type="radio" class="form-check-input" id="jenis_kelamin_perempuan" name="jenis_kelamin" value="perempuan" {{ $ppdb->jenis_kelamin == 'perempuan' ? 'checked' : '' }} disabled>Perempuan</input>
                        </div>
                        <div class="form-group mb-3">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control" id="agama" name="agama" value="{{ $ppdb->agama ?? '' }}" disabled required>
                        </div>
                        <div>
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" rows="3" value="{{ $ppdb->alamat ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="telepon">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $ppdb->telepon ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="{{ $ppdb->asal_sekolah ?? '' }}" disabled required>
                        </div>
                        <a href="{{ route('ppdb.index') }}" class="btn btn-primary">Back</a>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection