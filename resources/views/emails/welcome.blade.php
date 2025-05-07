<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to GymFit</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f6f8; font-family: 'Segoe UI', Tahoma, sans-serif; color: #333;">

    <div style="max-width: 620px; margin: 40px auto; background-color: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.06);">
        
        <!-- Header -->
        <div style="text-align: center; margin-bottom: 30px;">
            <h1 style="color: #ff7b00; font-size: 26px;">👋 Hello {{ $user->name }}, Welcome to GymFit!</h1>
            <p style="color: #666; font-size: 15px;">We’re excited to help you begin your fitness journey.</p>
        </div>

        <!-- Message -->
        <p style="font-size: 16px; line-height: 1.7; color: #444;">
            Thank you for signing up with <strong>GymFit</strong>! Our goal is to support you in becoming stronger, healthier, and more confident.
            From beginner routines to advanced programs, we’ve got your goals covered.
        </p>

        <!-- Features -->
        <div style="background-color: #f9f9f9; border-left: 4px solid #ff7b00; padding: 20px; margin: 25px 0; border-radius: 6px;">
            <h3 style="margin-top: 0; font-size: 17px; color: #333;">What you can explore:</h3>
            <ul style="padding-left: 18px; line-height: 1.6; font-size: 15px; color: #555;">
                <li>💪 Personalized workout plans</li>
                <li>📊 Progress tracking & achievements</li>
                <li>🧑‍🏫 Expert guidance from certified trainers</li>
                <li>🧘 Wellness & nutrition tips</li>
            </ul>
        </div>

        <!-- CTA -->
        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ url('/dashboard') }}"
               style="background-color: #ff7b00; color: white; padding: 12px 26px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 15px;">
                🚀 Go to Dashboard
            </a>
        </div>

        <!-- Footer -->
        <p style="margin-top: 40px; font-size: 13px; color: #777; text-align: center;">
            Need help? Reach out anytime — we're always here for you.<br>
            💬 support@gymfit.com | ❤️ Stay motivated!
        </p>
    </div>

</body>
</html>
