@extends('master')

@section('content')

    <h1>One to One</h1>

    <p>
        Un usuario posee sólo una credencial
    </p>

    @foreach($usersAndCredentials as $info)
        <h2>{{$info->name}}</h2>
        <p>
            Correo: {{$info->email}}
        </p>
        <p>
            Fecha de expiración de credencial: {{$info->credential['date_expire']}}
        </p>
        <hr>
    @endforeach

@stop
