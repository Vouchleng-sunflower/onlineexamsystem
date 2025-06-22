@extends('layout.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .auth-container {
            max-width: 450px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            overflow: hidden;
        }
        
        .auth-header {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .auth-header h2 {
            margin: 0;
            font-weight: 600;
            font-size: 1.8rem;
        }
        
        .auth-header p {
            margin: 5px 0 0 0;
            opacity: 0.9;
            font-size: 0.9rem;
            color: black;
        }
        
        .school-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .auth-body {
            padding: 40px 30px ;
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
                <div class="school-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h2>Create Account</h2>
                <p>Join our school management system</p>
            </div>
            
            <div class="auth-body">
                <form id="registerForm">
                    <div class="mb-3">
                        <select class="form-select" id="registerRole" required>
                            <option value="">Select your role</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                            <option value="parent">Parent</option>
                        </select>
                    </div>
                    
                    <div class="row">

                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                                <label for="firstName">
                                    <i class="fas fa-user me-2"></i>First Name
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                                <label for="lastName">Last Name</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-floating">
                        <input type="email" class="form-control" id="registerEmail" placeholder="name@example.com" required>
                        <label for="registerEmail">
                            <i class="fas fa-envelope me-2"></i>Email address
                        </label>
                    </div>
                    
                    <div class="form-floating">
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number" required>
                        <label for="phoneNumber">
                            <i class="fas fa-phone me-2"></i>Phone Number
                        </label>
                    </div>
                    
                    <div class="form-floating">
                        <input type="password" class="form-control" id="registerPassword" placeholder="Password" required>
                        <label for="registerPassword">
                            <i class="fas fa-lock me-2"></i>Password
                        </label>
                    </div>
                    
                    <div class="form-floating">
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                        <label for="confirmPassword">
                            <i class="fas fa-lock me-2"></i>Confirm Password
                        </label>
                    </div>
                    
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                        <label class="form-check-label" for="agreeTerms">
                            I agree to the <a href="#" class="toggle-link">Terms of Service</a> and <a href="#" class="toggle-link">Privacy Policy</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-user-plus me-2"></i>Create Account
                    </button>
                </form>
                
                <div class="toggle-form">
                    <p class="text-muted">Already have an account? 
                        <a href="login.html" class="toggle-link">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('registerEmail').value;
            const phone = document.getElementById('phoneNumber').value;
            const password = document.getElementById('registerPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            const role = document.getElementById('registerRole').value;
            const submitBtn = this.querySelector('button[type="submit"]');
            
            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }
            
            submitBtn.innerHTML = '<i class="fas fa-user-plus me-2"></i>Creating Account...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                if (firstName && lastName && email && phone && password && role) {
                    alert('Registration successful! Welcome ' + firstName + ' ' + lastName + '!\nRole: ' + role.charAt(0).toUpperCase() + role.slice(1) + '\nEmail: ' + email);
                    window.location.href = 'login.html';
                }
                
                submitBtn.innerHTML = '<i class="fas fa-user-plus me-2"></i>Create Account';
                submitBtn.disabled = false;
            }, 2000);
        });
        
        // Phone number formatting
        document.getElementById('phoneNumber').addEventListener('input', function() {
            let value = this.value.replace(/\D/g, '');
            if (value.length >= 6) {
                value = value.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
            }
            this.value = value;
        });
    </script>
</body>
</html>


@endsection