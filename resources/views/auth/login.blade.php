@extends('layout.app')
@section('content')

    <style>
        body {
            background: linear-gradient(135deg,rgb(211, 213, 222));
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .auth-container {
            max-width: 400px;
            margin: 50px auto;
            background:linear-gradient(135deg,rgb(247, 247, 249) 0%);
            border-radius: 20px ;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            overflow: hidden;
            
        }
        
        .auth-header {
           background: linear-gradient(135deg,rgb(247, 247, 249) 0%);
            color: white;
            padding: 20px 0px ;
            text-align: center;
           
            
        }
        
        .auth-header h2 {
            margin: 0;
            font-weight: 600;
            font-size: 1.8rem;
        }

        
        .school-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .auth-body {
            padding: 40px 30px;
           
        }
        
        .form-floating {
            margin-bottom: 20px;
        }
        
        .form-floating input, .form-select {
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 15px;
            font-size: 1rem;
            background: #f9fafb;
            transition: all 0.3s ease;
        }
        
        .form-floating input:focus, .form-select:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
            background: white;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            border: none;
            border-radius: 12px;
            padding: 15px;
            font-weight: 600;
            font-size: 1.1rem;
            width: 100%;
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(79, 70, 229, 0.3);
        }
        
        .toggle-form {
            text-align: center;
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid #e5e7eb;
        }
        
        .toggle-link {
            color: #4f46e5;
            text-decoration: none;
            font-weight: 600;
        }
        
        .toggle-link:hover {
            color: #7c3aed;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="auth-container">
            <div class="auth-header">
              
                <img src="{{ asset('./img/big-logo.png') }}" alt="">
                
            </div>
            
            <div class="auth-body">
                <form id="loginForm">
                    <!-- <div class="mb-3">
                        <select class="form-select" id="loginRole" required>
                            <option value="">Select your role</option>
                            <option value="admin">Administrator</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                            <option value="parent">Parent</option>
                        </select>
                    </div> -->

<<<<<<< HEAD
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
=======
                    
                    <div class="form-floating">
                        <input type="email" class="form-control" id="loginEmail" placeholder="name@example.com" required>
                        <label for="loginEmail">
                            <i class="fas fa-envelope me-2"></i>Email address
>>>>>>> 26fea7599bc9b7dddb20ebed7c2ba7b0aa2c0e15
                        </label>
                    </div>
                    
                    <div class="form-floating">
                        <input type="password" class="form-control" id="loginPassword" placeholder="Password" required>
                        <label for="loginPassword">
                            <i class="fas fa-lock me-2"></i>Password
                        </label>
                    </div>
                    
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">
                            Remember me
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </button>
                </form>
                
                <div class="toggle-form">
                    <p class="text-muted">Don't have an account? 
                        <a href="{{route('register')}}" class="toggle-link">Create Account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>


@endsection