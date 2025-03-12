@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Items</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderItems as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->order->id }}</td>
                <td>{{ $item->product->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>
                    <a href="{{ route('order-items.show', $item) }}" class="btn btn-sm btn-primary">
                        View
                    </a>
                    <a href="{{ route('order-items.edit', $item) }}" class="btn btn-sm btn-secondary">
                        Edit
                    </a>
                    <form action="{{ route('order-items.destroy', $item) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
