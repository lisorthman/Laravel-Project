@extends('layouts.app')

@section('content')
   <a href="/posts" class="btn btn-default">Go Back</a>
   <h1>{{$posts->title}}</h1> 
   <div>
    {{$posts->body}}
   </div>
   <hr>
   <small>Written on {{$posts->created_at}} </small>
   <hr>
   <a href="/posts/{{$posts->id}}/edit" class="btn btn-default">Edit</a>

   <form action="{{ route('posts.destroy', $posts->id) }}" method="POST" class="pull-right">
      @csrf
      @method('DELETE') <!-- This replaces the hidden '_method' field -->
      <button type="submit" class="btn btn-danger">Delete</button>
  </form>  
@endsection