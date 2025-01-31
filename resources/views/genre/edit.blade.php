@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($genre) ? 'Edit genre' : 'Tambah genre' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($genre) ? route('genre.update', $genre->id) : route('genre.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($genre))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="genre">Genre</label>
                            <input type="text" class="form-control" id="genre" name="genre" value="{{ $genre->genre ?? '' }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">{{ isset($genre) ? 'Update' : 'Save' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection