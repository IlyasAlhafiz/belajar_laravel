@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Data Order</div>
                <div class="card-body">
                
                    <div class="mb-3">
                        <a href="{{ route('buku.create') }}" class="btn btn-primary">Add</a>
                        <a href="{{ route('penerbit.index') }}" class="btn btn-primary">penerbit</a>
                        <a href="{{ route('genre.index') }}" class="btn btn-primary">genre</a>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Transaksi</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Image</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tanggal Terbit</th>
                                <th scope="col">Genre</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $id = 1; @endphp
                            @foreach($buku as $data)
                            <tr>
                                <th scope="row">{{ $id++ }}</th>
                                <td>{{ $data->nama_buku}}</td>
                                <td>{{ $data->harga}}</td>
                                <td>{{ $data->stok}}</td>
                                <td>
                                    <img src="{{ asset('images/buku/' .$data->image) }}" width="100" alt="">
                                </td>
                                <td>{{ $data->penerbit->nama_penerbit}}</td>
                                <td>{{ $data->tanggal_terbit}}</td>
                                <td>{{ $data->genre->genre }}</td>
                                <td>
                                    <a href="{{ route('buku.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('buku.show', $data->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('buku.destroy', $data->id) }}" method="POST" style="display:inline-block;">
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