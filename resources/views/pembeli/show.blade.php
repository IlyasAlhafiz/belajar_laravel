@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($pembeli) ? 'Edit pembeli' : 'Tambah pembeli' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($pembeli))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="pembeli">Nama Pembeli</label>
                            <input type="text" class="form-control" id="pembeli" name="nama_pembeli" value="{{ $pembeli->nama_pembeli ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin" value="Laki-Laki" {{ $pembeli->jenis_kelamin == 'Laki-Laki' ? 'checked' : '' }} disabled>Laki-Laki</input>
                            <input type="radio" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" {{ $pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} disabled>Perempuan</input>
                        </div>
                        <div class="form-group mb-3">
                            <label for="pembeli">Telepon</label>
                            <input type="text" class="form-control" id="pembeli" name="telepon" value="{{ $pembeli->telepon ?? '' }}" disabled required>
                        </div>
                        <a href="{{ route('pembeli.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection