@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1>Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary align-self-center">New product</a>
    </div>

    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>#</th><th>Name</th><th>Price</th><th>Stock</th><th width="180">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete this product?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center">No products yet.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
@endsection