@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reviews</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>User</th>
                <th>Review</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>{{ $review->product->name }}</td>
                <td>{{ $review->user->name }}</td>
                <td>{{ $review->review }}</td>
                <td>
                    <a href="{{ route('reviews.show', $review) }}" class="btn btn-sm btn-primary">
                        View
                    </a>
                    <a href="{{ route('reviews.edit', $review) }}" class="btn btn-sm btn-secondary">
                        Edit
                    </a>
                    <form action="{{ route('reviews.destroy', $review) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('reviews.create') }}" class="btn btn-primary">
        Create New Review
    </a>
</div>
@endsection
