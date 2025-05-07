<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | GymFit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Background Styling */
        body {
            background: linear-gradient(to right, #121212, #1a1a2e);
            color: white;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        /* Glow Animation */
        @keyframes glow {
            0% {
                box-shadow: 0 0 10px rgba(255, 123, 0, 0.6);
            }

            50% {
                box-shadow: 0 0 20px rgba(255, 123, 0, 0.8);
            }

            100% {
                box-shadow: 0 0 10px rgba(255, 123, 0, 0.6);
            }
        }

        /* Glassmorphism Card */
        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            width: 350px;
            text-align: center;
            animation: glow 2s infinite alternate;
            box-shadow: 0 0 15px rgba(255, 123, 0, 0.5);
        }

        .login-container h2 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 18px;
            text-align: left;
            position: relative;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
        }

        /* Input Styling */
        .form-group input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: none;
            outline: none;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease-in-out;
        }

        .form-group input:focus {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 15px rgba(255, 123, 0, 0.7);
            transform: scale(1.05);
        }

        /* Forgot Password Link Positioned Correctly */
        .forgot-password {
            display: block;
            text-align: right;
            margin-top: -10px;
            margin-bottom: 15px;
        }

        .forgot-password a {
            color: #ff7b00;
            font-weight: bold;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #ff5500;
        }

        /* Button */
        .btn-login {
            display: block;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            background: #ff7b00;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .btn-login:hover {
            background: #ff5500;
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(255, 123, 0, 1);
        }

        /* Register Link */
        .register-link {
            display: block;
            margin-top: 15px;
            font-size: 14px;
        }

        .register-link a {
            color: #ff7b00;
            font-weight: bold;
            transition: color 0.3s ease;
            text-decoration: none;
        }

        .register-link a:hover {
            color: #ff5500;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Welcome Back</h2>

        @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
        @endif

        @if($errors->any())
        <p class="error-message">{{ $errors->first('email') }}</p>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <p class="forgot-password">
                <a href="{{ url('/forgot-password') }}">Forgot Password?</a>
            </p>


            <button type="submit" class="btn-login">Login</button>
        </form>

        <p class="register-link">Don't have an account? <a href="{{ url('/') }}">Register</a></p>
    </div>

</body>

</html>