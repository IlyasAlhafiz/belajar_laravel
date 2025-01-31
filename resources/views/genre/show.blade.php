@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($genre) ? 'Edit genre' : 'Tambah genre' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($genre))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="genre">Genre</label>
                            <input type="text" class="form-control" id="genre" name="genre" value="{{ $genre->genre ?? '' }}" disabled required>
                        </div>
                        <a href="{{ route('genre.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection