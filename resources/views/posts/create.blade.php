@extends('layouts.app')

@section('content')
   <h1>Create Post</h1>
   <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <x-form-input label="Title" name="title" />
    <x-form-input label="Body" name="body" type="textarea" rows="5" cols="50" />
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>

</form>


   
@endsection