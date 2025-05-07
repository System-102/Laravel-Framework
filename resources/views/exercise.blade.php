<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises | GymFit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to right, #121212, #1a1a2e);
            color: white;
        }

        .exercise-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 20px;
            gap: 60px;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .exercise-section.show {
            opacity: 1;
            transform: translateY(0);
        }

        .exercise-img {
            width: 550px;
            height: 350px;
            object-fit: cover;
            border-radius: 14px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.1);
        }

        .exercise-img:hover {
            transform: scale(1.06);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        }

        .text-container {
            max-width: 500px;
            text-align: center;
        }

        .text-container h2 {
            font-size: 36px;
            font-weight: bold;
        }

        .exercise-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 14px 28px;
            font-size: 18px;
            border-radius: 10px;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn-orange:hover {
            background: #ff7b00;
            transform: scale(1.1);
        }

        .btn-blue:hover {
            background: #007bff;
            transform: scale(1.1);
        }

        .btn-green:hover {
            background: #009f5c;
            transform: scale(1.1);
        }

        .btn-red:hover {
            background: #ff0000;
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    @extends('layouts.app')

    @section('content')

    @include('layouts.navbar') 

    <div class="text-center pt-24">
        <h1 class="text-5xl font-bold">🏋️ Explore Exercises</h1>
        <p class="text-gray-300 mt-3 text-lg">Master essential exercises to enhance your fitness.</p>
    </div>

    <div class="container mx-auto px-10 py-16 space-y-20">

        <div class="exercise-section flex flex-col md:flex-row items-center">
            <img src="{{ asset('images/squats.webp') }}" alt="Squats" class="exercise-img">
            <div class="text-container">
                <h2 class="text-orange-400">🦵 Squats</h2>
                <p class="text-gray-300 mt-3">Boost lower body strength and improve flexibility with deep squats.</p>
                <a href="https://www.youtube.com/results?search_query=how+to+do+squats"
                    target="_blank" class="exercise-btn btn-orange bg-orange-500">Learn More</a>
            </div>
        </div>

        <div class="exercise-section flex flex-col md:flex-row-reverse items-center">
            <img src="{{ asset('images/push_up.webp') }}" alt="Push-Ups" class="exercise-img">
            <div class="text-container">
                <h2 class="text-blue-400">💪 Push-Ups</h2>
                <p class="text-gray-300 mt-3">Strengthen your upper body and core with this classic exercise.</p>
                <a href="https://www.youtube.com/results?search_query=how+to+do+push+ups"
                    target="_blank" class="exercise-btn btn-blue bg-blue-500">Learn More</a>
            </div>
        </div>

        <div class="exercise-section flex flex-col md:flex-row items-center">
            <img src="{{ asset('images/deadlift.webp') }}" alt="Deadlifts" class="exercise-img">
            <div class="text-container">
                <h2 class="text-green-400">🏋️ Deadlifts</h2>
                <p class="text-gray-300 mt-3">Increase full-body strength and posture with proper deadlifting techniques.</p>
                <a href="https://www.youtube.com/results?search_query=how+to+do+deadlifts"
                    target="_blank" class="exercise-btn btn-green bg-green-500">Learn More</a>
            </div>
        </div>

        <div class="exercise-section flex flex-col md:flex-row-reverse items-center">
            <img src="{{ asset('images/Planks.webp') }}" alt="Planks" class="exercise-img">
            <div class="text-container">
                <h2 class="text-red-400">🛡️ Planks</h2>
                <p class="text-gray-300 mt-3">Improve core stability and endurance with different plank variations.</p>
                <a href="https://www.youtube.com/results?search_query=how+to+do+planks"
                    target="_blank" class="exercise-btn btn-red bg-red-500">Learn More</a>
            </div>
        </div>


    </div>

    @include('layouts.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll(".exercise-section");

            const revealSection = () => {
                sections.forEach((section) => {
                    const sectionTop = section.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    if (sectionTop < windowHeight - 100) {
                        section.classList.add("show");
                    }
                });
            };

            window.addEventListener("scroll", revealSection);
            revealSection();
        });
    </script>

    @endsection

</body>

</html>