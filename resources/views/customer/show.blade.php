@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($customer) ? 'Edit customer' : 'Tambah customer' }}</div>

                <div class="card-body">
                        @csrf
                        @if(isset($customer))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="customer">Name Customer</label>
                            <input type="text" class="form-control" id="customer" name="name_customer" value="{{ $customer->name_customer ?? '' }}" disabled required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="gender">Gender</label><br>
                            <input type="radio" class="form-check-input" id="gender_male" name="gender" value="Male" {{ $customer->gender == 'Male' ? 'checked' : '' }} disabled>Male</input>
                            <input type="radio" class="form-check-input" id="gender_female" name="gender" value="Female" {{ $customer->gender == 'Female' ? 'checked' : '' }} disabled>Female</input>
                        </div>
                        <a href="{{ route('customer.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection