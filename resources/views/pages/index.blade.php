@extends('layouts/app')


@section('content')
<div class="jumbotron text-center">
<div class="container">
        <h1>{{$title}}</h1>
        <p>
            A blog made with Laravel
        </p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login">Login</a>
            <a class="btn btn-success btn-lg" href="/register">Register</a>
        </p>
</div>
        
</div>

@endsection
