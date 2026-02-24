@extends('layouts.app')
@section('content')
    <h1>Customer Details</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $customer->id }}</p>
            <p><strong>Name:</strong> {{ $customer->name }}</p>
            <p><strong>Email:</strong> {{ $customer->email }}</p>
            <p><strong>Phone:</strong> {{ $customer->phone }}</p>
            <p><strong>Image:</strong></p>
            @if($customer->image)
                <img src="{{ asset('storage/customers/'.$customer->image) }}" width="200">
            @endif
        </div>
    </div>
    <a href="{{ route('customers.index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
