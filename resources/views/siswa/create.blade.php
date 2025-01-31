@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($siswa) ? 'Edit Siswa' : 'Tambah Siswa' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('siswa.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($siswa))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" id="nis" name="nis" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki">Laki-laki</input>
                            <input type="radio" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin" value="perempuan">Perempuan</input>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" id="kelas" name="kelas" required>
                                <option value="XI RPL 1">XI RPL 1</option>
                                <option value="XI RPL 2">XI RPL 2</option>
                                <option value="XI RPL 3">XI RPL 3</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Gambar</label>
                            <input type="file" class="form-control" id="cover" name="cover" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
