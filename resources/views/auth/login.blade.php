@extends('layout.app')
@section('content')

<style>
    body {
        font-family: "Barlow", sans-serif;

        font-style: normal;
    }

    .login-card {
        border: 2px solid #6a1b9a;
        /* NPIC purple */
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .login-card img.logo {
        max-height: 80px;
        margin-bottom: 1rem;
    }

    .login-card .form-control {
        border-radius: 8px;
    }

    .login-card .btn-primary {
        background-color: #6a1b9a;
        border: none;
        border-radius: 8px;
        font-family: "Barlow", sans-serif;
        font-style: normal;
        font-weight: 500;
    }

    .login-card .btn-primary:hover {
        background-color: #4a148c;
    }

    input:hover {
        font-family: "Barlow", sans-serif;
        font-size: 14px;

        border: 2px solid #6a1b9a;
    }

    input:focus {
        font-family: "Barlow", sans-serif;
        font-size: 14px;
        border: 2px solid #6a1b9a;
    }

    a {
        font-family: "Barlow", sans-serif;
        font-size: 12px;
    }
</style>

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-100 justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="login-card text-center">
                <!-- Logo -->
                <img src="{{ asset('img/big-logo.png') }}" alt="NPIC Logo" class="logo mb-4 img-fluid">

                <!-- Institution name -->


                <!-- Login Form -->
                <form class="mt-4">
                    <div class="mb-3 text-start">
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="mb-3 text-start">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                           <div class="justify-content: space-between">
                        <a href="#" class="m-4  mx-3 ">Forgot Password</a>
                        <a href="#" class="m-4 p-4 mx-6" >Sign Up</a>
                    </div>  
                    </div>
                 

                    <div class="form-check mb-3 text-start">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>

                    <br>

                    <button type="submit" class="btn btn-primary w-50">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection