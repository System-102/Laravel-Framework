<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

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
        .forgot-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            width: 350px;
            text-align: center;
            animation: glow 2s infinite alternate;
            box-shadow: 0 0 15px rgba(255, 123, 0, 0.5);
        }

        .forgot-container h2 {
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

        /* Message Styling */
        .message {
            color: green;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .error {
            color: red;
            margin-bottom: 15px;
            font-size: 14px;
        }

        /* Button */
        .btn-reset {
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

        .btn-reset:hover {
            background: #ff5500;
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(255, 123, 0, 1);
        }

        /* Back to Login Link */
        .back-login {
            display: block;
            margin-top: 15px;
            font-size: 14px;
        }

        .back-login a {
            color: #ff7b00;
            font-weight: bold;
            transition: color 0.3s ease;
            text-decoration: none;
        }

        .back-login a:hover {
            color: #ff5500;
        }
    </style>
</head>
<body>

    <div class="forgot-container">
        <h2>Forgot Password</h2>

        @if(session('message'))
            <p class="message">{{ session('message') }}</p>
        @endif

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('auth.Submitforgetpassword') }}">
            @csrf
            <div class="form-group">
                <label for="email">Enter Your Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your Email" required>
            </div>

            <button type="submit" class="btn-reset">Send Reset Link</button>
        </form>

        <p class="back-login"><a href="{{ route('login') }}">Back to Login</a></p>
    </div>

</body>
</html>
