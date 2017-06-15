@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sed voluptate tenetur id qui fugit nesciunt, reiciendis rerum facere odit tempore, veniam cumque autem aut laboriosam nisi inventore ducimus! Vel.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection