@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Data Customer</div>
                <div class="card-body">
                
                    <div class="mb-3">
                        <a href="{{ route('customer.create') }}" class="btn btn-primary">Add</a>
                        <a href="{{ route('product.index') }}" class="btn btn-primary">Product</a>
                        <a href="{{ route('order.index') }}" class="btn btn-primary">Order</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $id = 1; @endphp
                            @foreach($customer as $data)
                            <tr>
                                <th scope="row">{{ $id++ }}</th>
                                <td>{{ $data->name_customer }}</td>
                                <td>{{ $data->gender }}</td>
                                <td>{{ $data->contact }}</td>
                                <td>
                                    <a href="{{ route('customer.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('customer.show', $data->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('customer.destroy', $data->id) }}" method="POST" style="display:inline-block;">
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