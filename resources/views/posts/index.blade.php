index.blade.php @extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>

    @if($posts->count())
        <div class="list-group mb-4">
            @foreach($posts as $post)
                <a href="{{ route('posts.show', $post->id) }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">{{ $post->title }}</h5>
                    <p class="mb-1">{{ Str::limit($post->body, 150) }}</p>
                </a>
            @endforeach
        </div>
    @else
        <p>No posts found!</p>
    @endif

    @auth
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    @endauth
@endsection
