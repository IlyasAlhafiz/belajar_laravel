@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($buku) ? 'Edit buku' : 'Tambah buku' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($buku))
                            @method('PUT')
                        @endif
                        <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="buku">Nama Buku</label>
                            <input type="text" class="form-control" id="buku" name="nama_buku" value="{{ $buku->nama_buku ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="buku">Harga</label>
                            <input type="text" class="form-control" id="buku" name="harga" value="{{ $buku->harga ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="buku">Stok</label>
                            <input type="text" class="form-control" id="buku" name="stok" value="{{ $buku->stok ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="buku">Image</label><br>
                            <img src="{{ asset('/images/buku/' . $buku->image) }}" width="100" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Penerbit</label>
                            <select name="id_penerbit" id="id_penerbit" class="form-control" disabled>
                                @foreach($penerbit as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="buku">Tanggal Terbit</label>
                            <input type="date" class="form-control" id="buku" name="tanggal_terbit" value="{{ $buku->tanggal_terbit ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Genre</label>
                            <select name="id_genre" id="id_genre" class="form-control" disabled>
                                @foreach($genre as $data)
                                    <option value="{{ $data->id }}">{{ $data->genre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                    <a href="{{ route('buku.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection