@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Data Produk</div>
                <div class="card-body">
                
                    <div class="mb-3">
                        <a href="{{ route('produk.create') }}" class="btn btn-primary">Add</a>
                        <a href="{{ route('kategori.index') }}" class="btn btn-primary">Tambah Kategori</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Cover</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $id = 1; @endphp
                            @foreach($produk as $data)
                            <tr>
                                <th scope="row">{{ $id++ }}</th>
                                <td>{{ $data->nama_produk }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->stok }}</td>
                                <td>{{ $data->kategori->nama_kategori }}</td>
                                <td>
                                    <img src="{{ asset('images/produk/' .$data->cover) }}" width="100" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('produk.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('produk.show', $data->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('produk.destroy', $data->id) }}" method="POST" style="display:inline-block;">
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