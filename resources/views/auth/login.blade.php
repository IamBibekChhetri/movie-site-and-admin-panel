@extends('layouts.app')

@section('content')
 <!-- authorization form -->
 <form action="{{route('login')}}" class="sign__form" method="POST">
    @csrf
     <a href="index.html" class="sign__logo">
         <img src="img/logo.svg" alt="" />
     </a>

     <div class="sign__group">
         <input type="text" class="sign__input" name="email" placeholder="Email" />
     </div>

     <div class="sign__group">
         <input type="password" class="sign__input" name="password" placeholder="Password" />
     </div>

     <div class="sign__group sign__group--checkbox">
         <input id="remember" name="remember" type="checkbox" checked="checked" />
         <label for="remember">Remember Me</label>
     </div>

     <button class="sign__btn" type="submit">Sign in</button>

     <span class="sign__text">Don't have an account?
         <a href="{{route('register')}}">Sign up!</a></span>

     <span class="sign__text"><a href="forgot.html">Forgot password?</a></span>
 </form>
 @endsection