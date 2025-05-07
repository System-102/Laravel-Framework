@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workouts | GymFit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to right, #121212, #1a1a2e);
            color: white;
        }

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

        .workout-img {
            width: 550px;
            height: 350px;
            object-fit: cover;
            border-radius: 14px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.1);
        }

        .workout-img:hover {
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

<div class="text-center pt-24">
    <h1 class="text-5xl font-bold">🔥 Explore Workouts</h1>
    <p class="text-gray-300 mt-3 text-lg">Find the perfect workout to match your fitness goals.</p>
</div>

<div class="container mx-auto px-10 py-16 space-y-20">

    @foreach ($workouts as $index => $workout)
    <div class="workout-section flex flex-col md:flex-row {{ $index % 2 !== 0 ? 'md:flex-row-reverse' : '' }} items-center">
        <img src="{{ asset('images/' . $workout->image) }}" alt="{{ $workout->title }}" class="workout-img">
        <div class="text-container">
            <h2 class="text-{{ $workout->color }}-400">{{ $workout->title }}</h2>
            <p class="text-gray-300 mt-3">{{ $workout->description }}</p>
            <a href="{{ route('workouts.show', $workout->id) }}" class="workout-btn bg-{{ $workout->color }}-500 btn-{{ $workout->color }}">
                Start Now
            </a>
        </div>
    </div>
    @endforeach

</div>

@include('layouts.footer')

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll(".workout-section");
        const revealSection = () => {
            sections.forEach(section => {
                const top = section.getBoundingClientRect().top;
                if (top < window.innerHeight - 100) {
                    section.classList.add("show");
                }
            });
        };
        window.addEventListener("scroll", revealSection);
        revealSection();
    });
</script>

</body>
</html>
@endsection
