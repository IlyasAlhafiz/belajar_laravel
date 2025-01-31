@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($product) ? 'Edit product' : 'Tambah product' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($product) ? route('product.update', $product->id) : route('product.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($product))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="name_product">Name Product</label>
                            <input type="text" class="form-control" id="name_product" name="name_product" value="{{ $product->name_product ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk" value="{{ $product->merk ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="stock">Stock</label>
                            <input type="text" class="form-control" id="stock" name="stock" value="{{ $product->stock ?? '' }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">{{ isset($product) ? 'Update' : 'Save' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection