@extends('layouts.app')

@section('content')
    <h1>New product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @include('products._form')
    </form>
@endsection