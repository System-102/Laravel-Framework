<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Whey Protein Reminder</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f3f6fa; font-family: 'Segoe UI', Tahoma, sans-serif; color: #333;">

    <div style="max-width: 620px; margin: 40px auto; background-color: #ffffff; padding: 35px; border-radius: 12px; box-shadow: 0 0 12px rgba(0,0,0,0.05);">

        <!-- Header -->
        <h2 style="text-align: center; color: #ff7b00; font-size: 26px;">💪 It's Time for Your Whey Protein!</h2>
        <p style="text-align: center; font-size: 15px; color: #666;">Keep fueling your gains and recovery – one scoop at a time.</p>

        <!-- Motivation Image (optional image can be placed in /public/images/) -->
        <div style="text-align: center; margin: 20px 0;">
            <img src="{{ asset('images/whey-protein-email.jpg') }}" alt="Whey Protein" style="width: 100%; max-width: 480px; border-radius: 10px;">
        </div>

        <!-- Reminder Box -->
        <div style="background-color: #fff9f4; padding: 20px; border-left: 5px solid #ff7b00; border-radius: 8px;">
            <h3 style="margin-top: 0; color: #333;">📌 Quick Reminder:</h3>
            <ul style="margin: 0; padding-left: 20px; font-size: 15px; color: #555; line-height: 1.7;">
                <li>🕒 Best taken within 30–45 minutes post-workout</li>
                <li>🥛 Mix with water or milk (as per your goal)</li>
                <li>⚖️ 1 scoop = approx. 20–25g protein</li>
                <li>🚫 Don’t skip — protein supports muscle repair & growth!</li>
            </ul>
        </div>

        <!-- Nutrition Tip Box -->
        <div style="background-color: #f0f4ff; padding: 18px 20px; border-radius: 8px; margin-top: 25px;">
            <h3 style="margin: 0; font-size: 16px; color: #0077cc;">🥗 Quick Nutrition Tip:</h3>
            <p style="margin: 8px 0 0; font-size: 14px; color: #444;">
                Pair your whey protein with a small carb source (like a banana or oats) to boost absorption and replenish glycogen stores after intense workouts.
            </p>
        </div>

        <!-- CTA Button -->
        <div style="text-align: center; margin: 30px 0;">
            <a href="{{ url('/dashboard') }}"
               style="display: inline-block; background-color: #ff7b00; color: #fff; padding: 12px 26px; font-weight: bold; border-radius: 6px; text-decoration: none; font-size: 15px;">
                ✅ Log Today’s Protein Intake
            </a>
        </div>

        <!-- Footer -->
        <p style="text-align: center; font-size: 13px; color: #777;">
            You're doing great — small habits create big results! 💥<br>
            — Team <strong style="color: #ff7b00;">GymFit</strong>
        </p>
    </div>

</body>
</html>
