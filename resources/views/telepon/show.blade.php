@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($telepon) ? 'Edit telepon' : 'Tambah telepon' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($telepon))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="telepon">Nomor Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="nomor" value="{{ $telepon->nomor ?? '' }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Id Pengguna</label>
                            <select name="id_pengguna" id="id_pengguna" class="form-control" disabled>
                                @foreach($pengguna as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $telepon->id_pengguna ? 'selected' : '' }}>{{ $data->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    <a href="{{ route('telepon.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection