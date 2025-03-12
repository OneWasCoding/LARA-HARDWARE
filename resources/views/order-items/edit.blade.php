@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Order Item</h1>

    <form action="{{ route('order-items.update', $orderItem) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Order ID</label>
            <input type="number" name="order_id" class="form-control" value="{{ $orderItem->order_id }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Product ID</label>
            <input type="number" name="product_id" class="form-control" value="{{ $orderItem->product_id }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ $orderItem->quantity }}" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Update Order Item
        </button>
    </form>
</div>
@endsection
