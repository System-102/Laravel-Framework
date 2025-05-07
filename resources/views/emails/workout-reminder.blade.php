<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workout Reminder</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f3f6fa; font-family: 'Segoe UI', Tahoma, sans-serif; color: #333;">

    <div style="max-width: 620px; margin: 40px auto; background-color: #ffffff; padding: 35px; border-radius: 12px; box-shadow: 0 0 12px rgba(0,0,0,0.05);">

        <!-- Header -->
        <h2 style="text-align: center; color: #ff7b00; font-size: 26px;">🏃 Time to Work Out!</h2>
        <p style="text-align: center; font-size: 15px; color: #666;">Don’t skip today’s workout! Whether it’s morning or evening — move your body and crush your goals!</p>

        <!-- Motivation Image -->
        <div style="text-align: center; margin: 20px 0;">
            <img src="{{ asset('images/workout-reminder.jpg') }}" alt="Person exercising" style="width: 100%; max-width: 480px; border-radius: 10px;">
        </div>

        <!-- Reminder Box -->
        <div style="background-color: #fff9f4; padding: 20px; border-left: 5px solid #ff7b00; border-radius: 8px;">
            <h3 style="margin-top: 0; color: #333;">📌 Quick Tips to Stay on Track:</h3>
            <ul style="margin: 0; padding-left: 20px; font-size: 15px; color: #555; line-height: 1.7;">
                <li>🧠 Remember your "why" – your personal motivation keeps you going.</li>
                <li>👟 Schedule your workouts like appointments to build a routine.</li>
                <li>🤝 Partner up with a friend for accountability and fun.</li>
                <li>🎧 Combine workouts with enjoyable activities, like listening to your favorite music or podcasts.</li>
            </ul>
        </div>

        <!-- Motivation Tip Box -->
        <div style="background-color: #f0f4ff; padding: 18px 20px; border-radius: 8px; margin-top: 25px;">
            <h3 style="margin: 0; font-size: 16px; color: #0077cc;">💡 Motivation Boost:</h3>
            <p style="margin: 8px 0 0; font-size: 14px; color: #444;">
                Even a short workout counts! Starting with just 5–10 minutes can help build consistency and momentum. :contentReference[oaicite:0]{index=0}
            </p>
        </div>

        <!-- CTA Button -->
        <div style="text-align: center; margin: 30px 0;">
            <a href="{{ url('/dashboard') }}"
               style="display: inline-block; background-color: #ff7b00; color: #fff; padding: 12px 26px; font-weight: bold; border-radius: 6px; text-decoration: none; font-size: 15px;">
                ✅ Log Today’s Workout
            </a>
        </div>

        <!-- Footer -->
        <p style="text-align: center; font-size: 13px; color: #777;">
            Keep moving forward — every step counts! 💥<br>
            — Team <strong style="color: #ff7b00;">GymFit</strong>
        </p>
    </div>

</body>
</html>
