@extends("layouts.main")

@section("styles")
    <link rel="stylesheet" href="/styles/login.css">
@section("title" ,"Login")

@section("content")
    <form action="" method="POST">
        @csrf
        <input name="email" placeholder="Email">
        <input name="password" placeholder="Password">
        <button>Login</button>
    </form>
@endsection