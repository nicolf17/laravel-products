@extends('layouts.app')

@section('content')
    <div class="form-header">
        <div>
            <span class="eyebrow">Productos</span>
            <h1 class="page-title">Crear producto</h1>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>
    </div>

    <form action="{{ route('products.store') }}" method="POST" class="product-form">
        @include('products._form')
    </form>
@endsection