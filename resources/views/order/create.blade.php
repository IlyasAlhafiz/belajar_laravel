@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($order) ? 'Edit Order' : 'Add Order' }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="nama">Product</label>
                            <select name="id_product" id="id_product" class="form-control">
                                @foreach($product as $data)
                                    <option value="{{ $data->id }}">{{ $data->name_product }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="order">Quantity</label>
                            <input type="text" class="form-control" id="order" name="qty" value="{{ $order->qty ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="order">Order Date</label>
                            <input type="date" class="form-control" id="order" name="order_date" value="{{ $order->order_date ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Customer</label>
                            <select name="id_customer" id="id_customer" class="form-control">
                                @foreach($customer as $data)
                                    <option value="{{ $data->id }}">{{ $data->name_customer }}</option>
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