@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Data product</div>
                <div class="card-body">
                    <div class="mb-3">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Add</a>
                    <a href="{{ route('customer.create') }}" class="btn btn-primary">Customer</a>
                    <a href="{{ route('order.index') }}" class="btn btn-primary">Order</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name product</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $id = 1; @endphp
                            @foreach($product as $data)
                            <tr>
                                <th scope="row">{{ $id++ }}</th>
                                <td>{{ $data->name_product }}</td>
                                <td>{{ $data->merk }}</td>
                                <td>{{ $data->price }}</td>
                                <td>{{ $data->stock }}</td>
                                <td>
                                    <img src="{{ asset('images/product/' .$data->image) }}" width="100" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('product.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('product.show', $data->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('product.destroy', $data->id) }}" method="POST" style="display:inline-block;">
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