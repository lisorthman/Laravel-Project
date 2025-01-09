@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <p>Welcome, {{ auth()->user()->name }}! You are logged in.</p>

        <!-- Button to View Blog -->
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">View Blog</a>

        <!-- Logout Button -->
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
@endsection


