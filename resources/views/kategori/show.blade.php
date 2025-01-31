@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($kategori) ? 'Edit kategori' : 'Tambah kategori' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($kategori))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategori->nama_kategori ?? '' }}" disabled required>
                        </div>
                        <a href="{{ route('kategori.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection