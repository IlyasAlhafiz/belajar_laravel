@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($product) ? 'Edit product' : 'Add product' }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($product))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="product">Name Product</label>
                            <input type="text" class="form-control" id="product" name="name_product" value="{{ $product->name_product ?? '' }}" required>
                            @error('name_product')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="product">Merk</label>
                            <input type="text" class="form-control" id="product" name="merk" value="{{ $product->merk ?? '' }}" required>
                            @error('merk')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="product">Price</label>
                            <input type="text" class="form-control" id="product" name="price" value="{{ $product->price ?? '' }}" required>
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="product">Stock</label>
                            <input type="text" class="form-control" id="product" name="stock" value="{{ $product->stock ?? '' }}" required>
                            @error('stock')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="product">Upload Picture</label>
                            <input type="file" class="form-control" id="inputGroupFile01" name="image" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection