@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Order Item</h1>

    <form action="{{ route('order-items.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Order ID</label>
            <input type="number" name="order_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Product ID</label>
            <input type="number" name="product_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Create Order Item
        </button>
    </form>
</div>
@endsection
