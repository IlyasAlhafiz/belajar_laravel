@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($siswa) ? 'Edit Siswa' : 'Tambah Siswa' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($siswa))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" id="nis" name="nis" value="{{ $siswa->nis }}" required disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->nama }}" required disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" id="jenis_kelamin_laki" name="jenis_kelamin" value="laki-laki" {{ $siswa->jenis_kelamin == 'laki-laki' ? 'checked' : '' }} disabled>Laki-laki</input>
                            <input type="radio" class="form-check-input" id="jenis_kelamin_perempuan" name="jenis_kelamin" value="perempuan" {{ $siswa->jenis_kelamin == 'perempuan' ? 'checked' : '' }} disabled>Perempuan</input>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $siswa->kelas }}" required disabled>
                        </div>
                        <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
