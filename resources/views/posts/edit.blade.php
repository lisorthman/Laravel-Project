@extends('layouts.app')

@section('content')
   <h1>Edit Post</h1>
   <<form action="{{ route('posts.update', $posts->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- This replaces the hidden '_method' field -->
    
    <!-- Title Input -->
    <x-form-input 
        label="Title" 
        name="title" 
        type="text" 
        value="{{ old('title', $posts->title) }}" 
        placeholder="Title" 
        class="form-control"
    />

    <!-- Body Textarea -->
    <x-form-input 
        label="Body" 
        name="body" 
        type="textarea" 
        rows="5" 
        cols="50" 
        value="{{ old('body', $posts->body) }}" 
        class="form-control" 
    />

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



   
@endsection