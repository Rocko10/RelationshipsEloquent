@extends('master')

@section('content')

    <h1>Many Through</h1>

    <p>
        Juegos por usuario
    </p>

    <ul>
        @foreach($users as $user)

            <li><a href="{{action('UsersController@gamesByUser', [$user])}}">{{$user->name}}</a></li>

        @endforeach
    </ul>

@stop
