@extends('layouts.app')

@section('content')
<!-- registration form -->
<form action="{{route('register')}}" class="sign__form" method="POST">
    @csrf
    <a href="index.html" class="sign__logo">
        <img src="img/logo.svg" alt="">
    </a>

    <div class="sign__group">
        <input type="text" class="sign__input" name="name" placeholder="Name">
    </div>

    <div class="sign__group">
        <input type="text" class="sign__input" name="email" placeholder="Email">
    </div>

    <div class="sign__group">
        <input type="password" class="sign__input" name="password" placeholder="Password">
    </div>

    <div class="sign__group">
        <input type="password" class="sign__input" name="password_confirmation" placeholder="Confirm Password">
    </div>

    <div class="sign__group sign__group--checkbox">
        <input id="remember" name="remember" type="checkbox" checked="checked">
        <label for="remember">I agree to the <a href="privacy.html">Privacy Policy</a></label>
    </div>

    <button class="sign__btn" type="submin">Sign up</button>

    <span class="sign__text">Already have an account? <a href="{{route('login')}}">Log In !</a></span>
</form>
<!-- registration form -->
@endsection
