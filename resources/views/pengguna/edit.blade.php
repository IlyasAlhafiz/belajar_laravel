@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($pengguna) ? 'Edit pengguna' : 'Tambah pengguna' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($pengguna) ? route('pengguna.update', $pengguna->id) : route('pengguna.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($pengguna))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pengguna->nama ?? '' }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">{{ isset($pengguna) ? 'Update' : 'Save' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection