@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($penerbit) ? 'Edit penerbit' : 'Tambah penerbit' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($penerbit) ? route('penerbit.update', $penerbit->id) : route('penerbit.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($penerbit))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="nama_penerbit">Name Product</label>
                            <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="{{ $penerbit->nama_penerbit ?? '' }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">{{ isset($penerbit) ? 'Update' : 'Save' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection