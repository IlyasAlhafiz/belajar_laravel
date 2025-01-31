@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($pembeli) ? 'Edit pembeli' : 'Add pembeli' }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('pembeli.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($pembeli))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="pembeli">Nama Pembeli</label>
                            <input type="text" class="form-control" id="pembeli" name="nama_pembeli" value="{{ $pembeli->nama_pembeli ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="pembeli">Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</input>
                            <input type="radio" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan">Perempuan</input>
                        </div>
                        <div class="form-group mb-3">
                            <label for="pembeli">Telepon</label>
                            <input type="number" class="form-control" id="pembeli" name="telepon" value="{{ $pembeli->telepon ?? '' }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection