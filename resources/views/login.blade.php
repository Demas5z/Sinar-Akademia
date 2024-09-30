<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sinar Akademia</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
<div class="login-container">
    <div class="logo">Sinar Akademia</div>
    <div class="welcome-text">Hello, Welcome Back</div>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="Enter Email" required autofocus>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="submit" value="Sign In">
        
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
    </form>
</div>
</body>
</html>
