@extends('master')

@section('content')

    <h1>One to Many</h1>

    @foreach($usersAndPosts as $info)

        <h2>{{$info->name}}</h2>

        @unless(sizeof($info->posts))
            <i>
                No hay posts
            </i>
        @endunless

        @foreach($info->posts as $post)

            <p>
                Post: {{$post->post}}
            </p>
            <small>Fecha: {{$post->created_at}}</small>
            
        @endforeach

        <hr>

    @endforeach

@stop
