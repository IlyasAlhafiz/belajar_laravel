@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($produk) ? 'Edit produk' : 'Tambah produk' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($produk))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="produk">Nama Produk</label>
                            <input type="text" class="form-control" id="produk" name="nama_produk" value="{{ $produk->nama_produk ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="produk">Harga</label>
                            <input type="text" class="form-control" id="produk" name="harga" value="{{ $produk->harga ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="produk">Stok</label>
                            <input type="text" class="form-control" id="produk" name="stok" value="{{ $produk->stok ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Kategori</label>
                            <select name="id_kategori" id="id_kategori" class="form-control" disabled>
                                @foreach($kategori as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $data->id_kategori ? 'selected' : '' }}>{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="produk">Gambar</label><br>
                            <img src="{{ asset('/images/produk/' . $produk->cover) }}" width="100" disabled>
                        </div>
                    <a href="{{ route('produk.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection