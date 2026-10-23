@extends('layouts.app')

@section('content')
    <h1>Edit product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @method('PUT')
        @include('products._form')
    </form>
@endsection