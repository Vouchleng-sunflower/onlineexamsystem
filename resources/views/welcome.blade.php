@extends('layout.app')

@section('title', 'Welcome - Online Examination System')

@section('styles')
<style>
    body{
            /* background: linear-gradient(135deg,rgb(211, 213, 222)); */
            min-height: 100vh;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .welcome-container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        /* background: linear-gradient(135deg,rgb(211, 213, 222)); */
        color: white;
    }
    
    .welcome-card {
        background:rgb(129, 84, 244);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 3rem;
        text-align: center;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(49, 46, 46, 0.2);
        max-width: 600px;
        width: 100%;
    }
    
    .welcome-title {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
    
    .welcome-subtitle {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        opacity: 0.9;
    }
    
    .auth-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .btn-auth {
        padding: 12px 30px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }
    
    .btn-primary-custom {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border-color: rgba(255, 255, 255, 0.3);
    }
    
    .btn-primary-custom:hover {
        background: rgba(255, 255, 255, 0.3);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    .btn-secondary-custom {
        background: transparent;
        color: white;
        border-color: rgba(255, 255, 255, 0.5);
    }
    
    .btn-secondary-custom:hover {
        background: rgba(255, 255, 255, 0.1);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    .header-nav {
        position: absolute;
        top: 2rem;
        right: 2rem;
    }
    
    .nav-link {
        color: white;
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 20px;
        transition: all 0.3s ease;
        margin-left: 10px;
    }
    
    .nav-link:hover {
        background: rgba(255, 255, 255, 0.2);
        color: white;
    }
    
    .nav-link.bordered {
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    @media (max-width: 768px) {
        .welcome-title {
            font-size: 2rem;
        }
        
        .welcome-card {
            background: rgba(46, 39, 144, 0.1);
            padding: 2rem;
            margin: 1rem;
        }
        
        .auth-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .header-nav {
            position: relative;
            top: auto;
            right: auto;
            margin-bottom: 2rem;
        }
    }
</style>
@endsection

@section('content')
<div class="welcome-container">
    <div class="header-nav">
        <!-- @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="nav-link bordered">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="nav-link">
                    <i class="fas fa-sign-in-alt me-2"></i>Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link bordered">
                        <i class="fas fa-user-plus me-2"></i>Register
                    </a>
                @endif
            @endauth
        @endif -->
    </div>

    <div class="welcome-card">
        <h1 class="welcome-title">
            <i class="fas fa-graduation-cap me-3"></i>
            Online Examination System
        </h1>
        
        <p class="welcome-subtitle">
            Welcome to our comprehensive online examination platform. 
            Take tests, track your progress, and achieve your learning goals.
        </p>

        @guest
            <div class="auth-buttons">
                <a href="{{ route('login') }}" class="btn-auth btn-primary-custom">
                    <i class="fas fa-sign-in-alt me-2"></i>Sign In
                </a>
                
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-auth btn-secondary-custom">
                        <i class="fas fa-user-plus me-2"></i>Sign Up
                    </a>
                @endif
            </div>
        @else
            <!-- <div class="auth-buttons">
                <a href="{{ url('/dashboard') }}" class="btn-auth btn-primary-custom">
                    <i class="fas fa-tachometer-alt me-2"></i>Go to Dashboard
                </a>
            </div> -->
            <a href="{{ route('login') }}" class="btn-auth btn-primary-custom">
                    <i class="fas fa-sign-in-alt me-2"></i>Login
                </a>
        @endguest
    </div>
</div>
@endsection
