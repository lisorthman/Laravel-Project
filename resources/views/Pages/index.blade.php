@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullscreen Background Image</title>
    <style>
        /* Ensure the body and html occupy the full viewport */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        /* Fullscreen background styling */
        .fullscreen-bg {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff; /* Optional: background color behind the image */
            height: 100%;
            width: 100%;
        }

        /* Styling for the image container */
        .image-container img {
            width: 115%; /* Increase the width to make the image slightly bigger */
            height: auto; /* Maintain aspect ratio */
            max-width: default; /* Remove the default max-width constraint */
            max-height: 100%; /* Remove the default max-height constraint */
            border-radius: 8px; /* Optional: adds rounded corners */
            transform: translateX(-120px); /* Move 20px to the left */
        }
    </style>
</head>
<body>
    <!-- Fullscreen Background -->
    <div class="fullscreen-bg">
        <!-- Image container with an overlay image -->
        <div class="image-container">
            <img src="{{ asset('images/homepage.jpg') }}" alt="Your Image">
        </div>
    </div>
</body>
</html>

@endsection
