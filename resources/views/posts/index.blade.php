@extends('layouts\app')
@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
    <div class="row">
        @foreach ($posts as $post)
        <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="http://placehold.it\500x500" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{$post->body}}</p>
                  <small>{{$post->created_at}}</small>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            
        @endforeach
    </div>
    @endif
@endsection