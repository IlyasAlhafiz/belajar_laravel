@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($kategori) ? 'Edit kategori' : 'Tambah kategori' }}</div>
                <form method="POST" action="{{ route('kategori.store') }}" enctype="multipart/form-data">
                <div class="card-body">
                        @csrf
                        @if(isset($kategori))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="nama_kategori">Nama kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required></input>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
