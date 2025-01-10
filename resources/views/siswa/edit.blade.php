@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($siswa) ? 'Edit Siswa' : 'Tambah Siswa' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($siswa) ? route('siswa.update', $siswa->id) : route('siswa.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($siswa))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" id="nis" name="nis" value="{{ $siswa->nis ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->nama ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" id="jenis_kelamin_laki" name="jenis_kelamin" value="laki-laki" {{ isset($siswa) && $siswa->jenis_kelamin == 'laki-laki' ? 'checked' : '' }}>Laki-laki</input>
                            <input type="radio" class="form-check-input" id="jenis_kelamin_perempuan" name="jenis_kelamin" value="perempuan" {{ isset($siswa) && $siswa->jenis_kelamin == 'perempuan' ? 'checked' : '' }}>Perempuan</input>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" id="kelas" name="kelas" required>
                                <option value="XI RPL 1" {{ isset($siswa) && $siswa->kelas == 'XI RPL 1' ? 'selected' : '' }}>XI RPL 1</option>
                                <option value="XI RPL 2" {{ isset($siswa) && $siswa->kelas == 'XI RPL 2' ? 'selected' : '' }}>XI RPL 2</option>
                                <option value="XI RPL 3" {{ isset($siswa) && $siswa->kelas == 'XI RPL 3' ? 'selected' : '' }}>XI RPL 3</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">{{ isset($siswa) ? 'Update' : 'Save' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection