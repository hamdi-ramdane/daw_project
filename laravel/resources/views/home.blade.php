@extends("layout")

@section("styles")
    <link rel="stylesheet" href="/styles/home.css">
    
@section("title" ,"Home")

@section("content")
    <h1>Welcome to Pixel Recovery </h1>
    <nav>
        <a href="/quiz">Quiz</a>
        <a href="/login">Login</a>
        <a href="/register">Register</a>
        <a href="/profile">Profile</a>
        <a href="/admin">Admin</a>
    </nav>
    <ul>
    @foreach($users as $user)
        <li>{{ $user->first_name }}</li>
    @endforeach
    </ul>
@endsection