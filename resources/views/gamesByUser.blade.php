@extends('master')

@section('content')

    <h1>Many Through</h1>

    <p>
        Juegos por usuario
    </p>

    <ul>
        @foreach($games as $game)

            <li>{{$game->title}}</li>

        @endforeach
    </ul>

@stop
