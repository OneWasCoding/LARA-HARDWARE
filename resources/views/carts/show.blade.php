@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cart Details</h1>

    <p>ID: {{ $cart->id }}</p>
    <p>User: {{ $cart->user->name ?? 'Guest' }}</p>
    <p>Product: {{ $cart->product->name }}</p>
    <p>Quantity: {{ $cart->quantity }}</p>

    <a href="{{ route('carts.index') }}" class="btn btn-secondary">
        Back to Carts
    </a>
</div>
@endsection
