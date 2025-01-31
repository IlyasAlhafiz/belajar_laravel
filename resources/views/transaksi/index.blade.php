@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Data Transaksi</div>
                <div class="card-body">
                
                    <div class="mb-3">
                        <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Add</a>
                        <a href="{{ route('buku.index') }}" class="btn btn-primary">Buku</a>
                        <a href="{{ route('pembeli.index') }}" class="btn btn-primary">Pembeli</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Tanggal Transaksi</th>
                                <th scope="col">Buku</th>
                                <th scope="col">Pembeli</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $id = 1; @endphp
                            @foreach($transaksi as $data)
                            <tr>
                                <th scope="row">{{ $id++ }}</th>
                                <td>{{ $data->jumlah}}</td>
                                <td>{{ $data->tanggal_transaksi}}</td>
                                <td>{{ $data->buku->nama_buku}}</td>
                                <td>{{ $data->pembeli->nama_pembeli }}</td>
                                <td>
                                    <a href="{{ route('transaksi.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('transaksi.show', $data->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('transaksi.destroy', $data->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection