<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Back</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f7f7f7; font-family: Arial, sans-serif; color: #333;">

    <div style="max-width: 600px; margin: 40px auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);">
        
        <h2 style="color: #ff7b00; text-align: center; margin-bottom: 20px;">
            👋 Welcome Back, {{ $user->name }}!
        </h2>

        <p style="font-size: 16px; line-height: 1.6; text-align: center;">
            We're happy to see you again at <strong>GymFit</strong>.
        </p>

        <p style="font-size: 15px; line-height: 1.6; text-align: center; margin-top: 10px;">
            Let’s keep up the momentum and move closer to your fitness goals. 💪
        </p>

        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ url('/dashboard') }}"
               style="display: inline-block; background-color: #ff7b00; color: white; padding: 12px 24px; border-radius: 6px; text-decoration: none; font-weight: bold;">
                Go to Dashboard
            </a>
        </div>

        <p style="text-align: center; font-size: 13px; color: #777; margin-top: 30px;">
            Stay consistent. You've got this!
        </p>
    </div>

</body>
</html>
