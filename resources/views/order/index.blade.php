@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Order</div>
                <div class="card-body">
                
                    <div class="mb-3">
                        <a href="{{ route('order.create') }}" class="btn btn-primary">Add</a>
                        <a href="{{ route('product.index') }}" class="btn btn-primary">Product</a>
                        <a href="{{ route('customer.index') }}" class="btn btn-primary">Customer</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Product</th>
                                <th scope="col">Quanity</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Customer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $id = 1; @endphp
                            @foreach($order as $data)
                            <tr>
                                <th scope="row">{{ $id++ }}</th>
                                <td>{{ $data->product->name_product }}</td>
                                <td>{{ $data->qty }}</td>
                                <td>{{ $data->order_date}}</td>
                                <td>{{ $data->customer->name_customer }}</td>
                                <td>
                                    <a href="{{ route('order.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('order.show', $data->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('order.destroy', $data->id) }}" method="POST" style="display:inline-block;">
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