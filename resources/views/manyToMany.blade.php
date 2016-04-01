@extends('master')

@section('content')

    <h1>Many to many</h1>

    <h2>Ver productos de cada usuario</h2>
    <ul>
        @foreach($users as $user)

            <li><a href="{{action('UsersController@productsByUser', [$user])}}">{{$user->name}}</a></li>

        @endforeach
    </ul>

    <h2>Ver usuario que compró cada producto</h2>

    <ul>

        @foreach($products as $product)
            <li><a href="{{action('ProductsController@usersByProduct', [$product])}}">{{$product->name}} (${{$product->price}})</a></li>
        @endforeach

    </ul>

@stop
