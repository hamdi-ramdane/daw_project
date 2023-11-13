@extends("layouts.main")

@section("styles")
    <link rel="stylesheet" href="/styles/register.css">
@section("title" ,"register")

@section("content")
    <form action="" method="POST">
        <input name="first_name" placeholder="First Name">
        <input name="last_name" placeholder="Last Name">
        <input name="email" placeholder="Email">
        <input name="password" placeholder="Passowrd">
        <input name="password_check" placeholder="ReType Password">
        <div class="gender">
            <label> Gender </label>
            <select>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
        <input type="date" name="date_of_birth" >
        <button>Register</button>
    </form>
@endsection