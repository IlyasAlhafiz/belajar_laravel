@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($transaksi) ? 'Edit transaksi' : 'Tambah transaksi' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($transaksi))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="transaksi">Jumlah</label>
                            <input type="text" class="form-control" id="transaksi" name="jumlah" value="{{ $transaksi->jumlah ?? '' }}" required disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="transaksi">Tanggal Transaksi</label>
                            <input type="date" class="form-control" id="transaksi" name="tanggal" value="{{ $transaksi->tanggal ?? '' }}" required disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="transaksi">Buku</label>
                            <select name="id_buku" id="id_buku" class="form-control" disabled>
                                @foreach($buku as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_buku }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="transaksi">Pembeli</label>
                            <select name="id_pembeli" id="id_pembeli" class="form-control" disabled>
                                @foreach($pembeli as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
                                @endforeach
                            </select>
                        </div>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection