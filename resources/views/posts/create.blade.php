@extends('layouts\app')
@section('content')
<h1>{{$title}}</h1>
{{ Form::open(array('url' => '/add')) }}
       <input name='title' type="text" placeholder="Title"><br>
       <textarea name="blogBody" id="bBody" cols="30" rows="10"></textarea><br>
       <input type="file" name="featuredImage" id="fImage"><br>
       <input type="submit" value="submit">
{{ Form::close() }}
@endsection