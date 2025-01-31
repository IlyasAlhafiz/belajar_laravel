@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($product) ? 'Edit product' : 'Tambah product' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($product))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="product">Name Product</label>
                            <input type="text" class="form-control" id="product" name="name_product" value="{{ $product->name_product ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="product">Merk</label>
                            <input type="text" class="form-control" id="product" name="merk" value="{{ $product->merk ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="product">Price</label>
                            <input type="text" class="form-control" id="product" name="price" value="{{ $product->price ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="product">Stock</label>
                            <input type="text" class="form-control" id="product" name="stock" value="{{ $product->stock ?? '' }}" disabled required>
                        </div>
                        <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection