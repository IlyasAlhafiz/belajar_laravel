@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($telepon) ? 'Edit telepon' : 'Tambah telepon' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('telepon.store') }}" enctype="multipart/form-data">
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                        @csrf
                        @if(isset($telepon))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="telepon">Nomor Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="nomor" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Id Pengguna</label>
                            <select name="id_pengguna" id="id_pengguna" class="form-control">
                                @foreach($pengguna as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
