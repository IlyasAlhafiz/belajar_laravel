@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($buku) ? 'Edit Order' : 'Add Order' }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('buku.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="buku">Nama Buku</label>
                            <input type="text" class="form-control" id="buku" name="nama_buku" value="{{ $buku->nama_buku ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="buku">Harga</label>
                            <input type="text" class="form-control" id="buku" name="harga" value="{{ $buku->harga ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="buku">Stok</label>
                            <input type="text" class="form-control" id="buku" name="stok" value="{{ $buku->stok ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="buku">Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="buku">Penerbit</label>
                            <select name="id_penerbit" id="id_penerbit" class="form-control">
                                @foreach($penerbit as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="buku">Tanggal Terbit</label>
                            <input type="date" class="form-control" id="buku" name="tanggal_terbit" value="{{ $buku->tanggal_terbit ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="buku">Genre</label>
                            <select name="id_genre" id="id_genre" class="form-control">
                                @foreach($genre as $data)
                                    <option value="{{ $data->id }}">{{ $data->genre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection