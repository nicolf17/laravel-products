@extends('layouts.app')

@section('content')
    <div class="form-header">
        <div>
            <span class="eyebrow">Productos</span>
            <h1 class="page-title">Editar producto</h1>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>
    </div>

    <form action="{{ route('products.update', $product) }}" method="POST" class="product-form">
        @method('PUT')
        @include('products._form')
    </form>
@endsection