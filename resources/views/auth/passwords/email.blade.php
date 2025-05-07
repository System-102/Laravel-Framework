<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Reset Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .email-container {
            max-width: 480px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            border: 1px solid #ddd;
        }
        h2 {
            color: #1e40af; /* Dark Blue */
        }
        p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }
        .btn {
            display: inline-block;
            background-color: #2563eb; /* Blue */
            color: #ffffff !important;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 20px;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #1e40af; /* Darker Blue */
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>Password Reset Request</h2>
        <p>Hello,</p>
        <p>You recently requested to reset your password for your account. Click the button below to reset it.</p>
        <a href="{{ route('auth.showresetpassword', ['token' => $token]) }}" class="btn">Reset Password</a>
        <p class="footer">If you didn’t request a password reset, you can safely ignore this email.</p>
        <p class="footer">This link will expire in 60 minutes.</p>
    </div>
</body>
</html>
