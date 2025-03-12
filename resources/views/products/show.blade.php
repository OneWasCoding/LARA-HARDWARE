@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Details</h1>

    <p>ID: {{ $product->id }}</p>
    <p>Name: {{ $product->name }}</p>
    <p>Price: ${{ number_format($product->price, 2) }}</p>
    <p>Stock: {{ $product->stock }}</p>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        Back to Products
    </a>
    <a href="{{ route('cart.add', $product) }}" class="btn btn-primary">
    Add to Cart
</a>

</div>
@endsection
