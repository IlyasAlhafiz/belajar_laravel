@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($penerbit) ? 'Edit penerbit' : 'Tambah penerbit' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($penerbit))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="penerbit">Nama Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="nama_penerbit" value="{{ $penerbit->nama_penerbit ?? '' }}" disabled required>
                        </div>
                        <a href="{{ route('penerbit.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection