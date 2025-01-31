@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($transaksi) ? 'Edit Order' : 'Add Order' }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('transaksi.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="transaksi">Jumlah</label>
                            <input type="text" class="form-control" id="transaksi" name="jumlah" value="{{ $transaksi->jumlah ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="transaksi">Tanggal Transaksi</label>
                            <input type="date" class="form-control" id="transaksi" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="transaksi">Buku</label>
                            <select name="id_buku" id="id_buku" class="form-control">
                                @foreach($buku as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_buku }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="transaksi">Pembeli</label>
                            <select name="id_pembeli" id="id_pembeli" class="form-control">
                                @foreach($pembeli as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
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