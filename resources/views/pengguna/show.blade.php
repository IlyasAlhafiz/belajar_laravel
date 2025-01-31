@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($pengguna) ? 'Edit pengguna' : 'Tambah pengguna' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($pengguna))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="nama_lengkap">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pengguna->nama ?? '' }}" disabled required>
                        </div>
                        <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection