@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Details</h1>

    <p>ID: {{ $order->id }}</p>
    <p>User: {{ $order->user->name }}</p>
    <p>Order Date: {{ $order->order_date }}</p>
    <p>Status: {{ $order->status }}</p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr>
                <td>{{ $item->product->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>${{ number_format($item->product->price, 2) }}</td>
                <td>${{ number_format($item->product->price * $item->quantity, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('orders.index') }}" class="btn btn-secondary">
        Back to Orders
    </a>
</div>
@endsection
