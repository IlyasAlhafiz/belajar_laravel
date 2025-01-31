@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($produk) ? 'Edit produk' : 'Tambah produk' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($produk))
                            @method('PUT')
                        @endif
                        <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="nama">Product</label>
                            <select name="id_product" id="id_product" class="form-control" disabled>
                                @foreach($product as $data)
                                    <option value="{{ $data->id }}">{{ $data->name_product }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="order">Quantity</label>
                            <input type="text" class="form-control" id="order" name="qty" value="{{ $order->qty ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="order">Order Date</label>
                            <input type="date" class="form-control" id="order" name="order_date" value="{{ $order->order_date ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Customer</label>
                            <select name="id_customer" id="id_customer" class="form-control" disabled>
                                @foreach($customer as $data)
                                    <option value="{{ $data->id }}">{{ $data->name_customer }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                    <a href="{{ route('order.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection