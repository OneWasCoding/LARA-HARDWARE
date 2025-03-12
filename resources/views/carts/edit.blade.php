@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Cart</h1>

    <form action="{{ route('carts.update', $cart) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">User ID</label>
            <input type="number" name="user_id" class="form-control" value="{{ $cart->user_id }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Product ID</label>
            <input type="number" name="product_id" class="form-control" value="{{ $cart->product_id }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ $cart->quantity }}" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Update Cart
        </button>
    </form>
</div>
@endsection
