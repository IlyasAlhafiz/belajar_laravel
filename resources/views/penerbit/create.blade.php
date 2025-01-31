@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($penerbit) ? 'Edit penerbit' : 'Add penerbit' }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('penerbit.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($penerbit))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="penerbit">Nama Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="nama_penerbit" value="{{ $penerbit->nama_penerbit ?? '' }}" required>
                            @error('nama_penerbit')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection