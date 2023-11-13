@extends("layouts.main")

@section("styles")
    <link rel="stylesheet" href="/styles/register.css">
@section("title" ,"register")

@section("content")
    <form action="" method="POST">
        @csrf
        <input name="first_name" placeholder="First Name" value="rick">
        <input name="last_name" placeholder="Last Name" value="morty">
        <input name="email" placeholder="Email" value="ricknmorty@gmail.com">
        <input name="password" placeholder="Passowrd" value="mypassword123">
        <input name="password_check" placeholder="ReType Password" value="mypassword123">
        <div class="gender" name="gender">
            <label> Gender </label>
            <select>
                <option value="male" >Male</option>
                <option value="female" >Female</option>
            </select>
        </div>
        <input type="date" name="date_of_birth" >
        <button>Register</button>
    </form>
@endsection