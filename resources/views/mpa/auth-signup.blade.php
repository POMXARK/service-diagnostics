@extends('layouts.auth')

@section('content')
    <form method="POST" action="/register">
        @csrf
        <img src="{{ asset('images/logo-dark.svg') }}'" alt="" class="img-fluid mb-4">
        <h4 class="mb-3 f-w-400">Sign up</h4>
        <div class="input-group mb-3">
            <span class="input-group-text"><i data-feather="user"></i></span>
            <input name="name" type="text" class="form-control" placeholder="Username">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i data-feather="mail"></i></span>
            <input name="email" type="email" class="form-control" placeholder="Email address">
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text"><i data-feather="lock"></i></span>
            <input name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group text-left mt-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Send me the <a href="#!"> Newsletter</a> weekly.
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
    </form>
    <p class="mb-2">Already have an account? <a href="{{ route('logout') }}"
                                                class="f-w-400">Signin</a></p>
@endsection
