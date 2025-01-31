@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($customer) ? 'Edit customer' : 'Add customer' }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($customer))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="customer">Name Customer</label>
                            <input type="text" class="form-control" id="customer" name="name_customer" value="{{ $customer->name_customer ?? '' }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="gender">Gender</label><br>
                            <input type="radio" class="form-check-input" id="gender_male" name="gender" value="Male">Male</input>
                            <input type="radio" class="form-check-input" id="gender_female" name="gender" value="Female">Female</input>
                        </div>
                        <div class="form-group mb-3">
                            <label for="customer">Contact</label>
                            <input type="text" class="form-control" id="customer" name="contact" value="{{ $customer->contact ?? '' }}" required></input>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection