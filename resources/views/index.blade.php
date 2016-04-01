@extends('master')

@section('content')

    <h1>Relaciones Eloquent</h1>

    <ul>
        <li> <a href="{{url('one-to-one')}}">one - one</a> </li>
        <li> <a href="{{url('one-to-many')}}">one - many</a> </li>
    </ul>

@stop
