<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body style="background-color: #365E32; min-height: 100vh">
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <p>Welcome back! Please login to your account.</p>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                </div>
                <div class="checkbox">
                    <label for="remember-me">
                        <input type="checkbox" id="remember-me" name="remember-me"> Remember me
                    </label>
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="links">
                <a href="#">Forgot password?</a>
                <a href="#">New User? Signup</a>
            </div>
        </div>
    </div>
</body>

</html>