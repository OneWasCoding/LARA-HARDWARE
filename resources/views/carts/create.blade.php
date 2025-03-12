@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Cart</h1>

    <form action="{{ route('carts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">User ID</label>
            <input type="number" name="user_id" class="form-control">
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
            Create Cart
        </button>
    </form>
</div>
@endsection
