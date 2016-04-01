@extends('master')

@section('content')

    <h1>Usuarios</h1>

    <ul>

        @foreach($users as $user)

            <li>{{$user->name}} Email: {{$user->email}}</li>

        @endforeach

    </ul>


@stop
