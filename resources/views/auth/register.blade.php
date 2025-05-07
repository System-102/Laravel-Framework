<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | GymFit</title>
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
            0% { box-shadow: 0 0 10px rgba(255, 123, 0, 0.6); }
            50% { box-shadow: 0 0 20px rgba(255, 123, 0, 0.8); }
            100% { box-shadow: 0 0 10px rgba(255, 123, 0, 0.6); }
        }

        /* Fade-in Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Glassmorphism Card */
        .register-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            width: 400px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            box-shadow: 0 0 15px rgba(255, 123, 0, 0.5);
            animation: glow 2s infinite alternate;
        }

        .register-container h2 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            animation: fadeIn 1.2s ease-in-out;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 18px;
            text-align: left;
            animation: fadeIn 1.4s ease-in-out;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
        }

        /* Input Effects */
        .form-group input, .form-group select {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: none;
            outline: none;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 0 10px transparent;
        }

        .form-group input:focus, .form-group select:focus {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 15px rgba(255, 123, 0, 0.7);
            transform: scale(1.05);
        }

        /* Dropdown Styling */
        .form-group select {
            cursor: pointer;
        }

        /* Button */
        .btn-register {
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
            animation: fadeIn 1.6s ease-in-out;
        }

        .btn-register:hover {
            background: #ff5500;
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(255, 123, 0, 1);
        }

        /* Error & Success Messages */
        .error-message, .success-message {
            margin-bottom: 10px;
            font-size: 14px;
            animation: fadeIn 1.8s ease-in-out;
        }

        .error-message { color: #ff4b4b; }
        .success-message { color: #4CAF50; }

        /* Login Link */
        .login-link {
            display: block;
            margin-top: 10px;
            font-size: 14px;
            animation: fadeIn 2s ease-in-out;
        }

        .login-link a {
            color: #ff7b00;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #ff5500;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Create an Account</h2>

        @if(session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        @if($errors->any())
            <p class="error-message">{{ implode(', ', $errors->all()) }}</p>
        @endif

        <form action="{{ url('/') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <label>Role</label>
                <select name="role" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" class="btn-register">Register</button>
        </form>

        <p class="login-link">Already have an account? <a href="{{ url('/login') }}">Login</a></p>
    </div>

</body>
</html>
