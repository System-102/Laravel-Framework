<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body>
    <p>Hello,</p>
    <p>You requested a password reset. Click the button below to reset your password:</p>
    <p>
        <a href="{{ $resetLink }}" 
           style="display: inline-block; padding: 10px 15px; background-color: blue; color: white; text-decoration: none; border-radius: 5px;">
           Reset Password
        </a>
    </p>
    <p>If you did not request a password reset, please ignore this email.</p>
</body>
</html>
