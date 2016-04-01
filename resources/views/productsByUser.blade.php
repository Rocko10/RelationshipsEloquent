@extends('master')

@section('content')

    <h1>Productos</h1>

    <ul>
        @foreach($products as $product)
            <li>{{$product->name}} ${{$product->price}}</li>
        @endforeach
    </ul>


@stop
