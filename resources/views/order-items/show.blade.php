@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Item Details</h1>

    <p>ID: {{ $orderItem->id }}</p>
    <p>Order ID: {{ $orderItem->order->id }}</p>
    <p>Product: {{ $orderItem->product->name }}</p>
    <p>Quantity: {{ $orderItem->quantity }}</p>

    <a href="{{ route('order-items.index') }}" class="btn btn-secondary">
        Back to Order Items
    </a>
</div>
@endsection
