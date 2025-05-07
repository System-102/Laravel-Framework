<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workouts | GymFit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Background Styling */
        body {
            background: linear-gradient(to right, #121212, #1a1a2e);
            color: white;
        }

        /* Workout Section Styling */
        .workout-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 20px;
            gap: 60px;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .workout-section.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Image Styling */
        .workout-img {
            width: 550px;
            height: 350px;
            object-fit: cover;
            border-radius: 14px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.1);
        }

        /* Glow Effect on Hover */
        .workout-img:hover {
            transform: scale(1.06);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        }

        /* Text Container */
        .text-container {
            max-width: 500px;
            text-align: center;
        }

        .text-container h2 {
            font-size: 36px;
            font-weight: bold;
        }

        /* Buttons */
        .workout-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 14px 28px;
            font-size: 18px;
            border-radius: 10px;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn-orange:hover { background: #ff7b00; transform: scale(1.1); }
        .btn-blue:hover { background: #007bff; transform: scale(1.1); }
        .btn-green:hover { background: #009f5c; transform: scale(1.1); }
        .btn-red:hover { background: #ff0000; transform: scale(1.1); }
    </style>
</head>
<body>

@extends('layouts.app')

@section('content')

@include('layouts.navbar')

<div class="text-center pt-24">
    <h1 class="text-5xl font-bold">🔥 Explore Workouts</h1>
    <p class="text-gray-300 mt-3 text-lg">Find the perfect workout to match your fitness goals.</p>
</div>

<div class="container mx-auto px-10 py-16 space-y-20">

<div class="workout-section flex flex-col md:flex-row items-center">
    <img src="{{ asset('images/Strength.webp') }}" alt="Strength Training" class="workout-img">
    <div class="text-container">
        <h2 class="text-orange-400">💪 Strength Training</h2>
        <p class="text-gray-300 mt-3">Build muscle with weightlifting exercises to increase strength and endurance.</p>
        <a href="{{ route('workout.strength') }}" class="workout-btn btn-orange bg-orange-500">Start Now</a>
    </div>
</div>

<div class="workout-section flex flex-col md:flex-row-reverse items-center">
    <img src="{{ asset('images/cardio.webp') }}" alt="Cardio" class="workout-img">
    <div class="text-container">
        <h2 class="text-blue-400">🏃 Cardio</h2>
        <p class="text-gray-300 mt-3">Improve endurance and cardiovascular health with high-intensity workouts.</p>
        <a href="{{ route('workout.cardio') }}" class="workout-btn btn-blue bg-blue-500">Start Now</a>
    </div>
</div>

<div class="workout-section flex flex-col md:flex-row items-center">
    <img src="{{ asset('images/yoga.webp') }}" alt="Yoga" class="workout-img">
    <div class="text-container">
        <h2 class="text-green-400">🧘 Yoga</h2>
        <p class="text-gray-300 mt-3">Increase flexibility, reduce stress, and enhance balance with guided yoga sessions.</p>
        <a href="{{ route('workout.yoga') }}" class="workout-btn btn-green bg-green-500">Start Now</a>
    </div>
</div>

<div class="workout-section flex flex-col md:flex-row-reverse items-center">
    <img src="{{ asset('images/boxing.webp') }}" alt="HIIT" class="workout-img">
    <div class="text-container">
        <h2 class="text-red-400">🔥 HIIT</h2>
        <p class="text-gray-300 mt-3">Boost metabolism and burn fat quickly with high-intensity interval training.</p>
        <a href="{{ route('workout.hiit') }}" class="workout-btn btn-red bg-red-500">Start Now</a>
    </div>
</div>

</div>

@include('layouts.footer')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll(".workout-section");

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
