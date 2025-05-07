<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymFit Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Hero Section */
        .hero {
            background: url("{{ asset('images/gym-bg.webp') }}") no-repeat center center/cover;
            height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            font-weight: bold;
        }

        .hero h1 {
            font-size: 2.8rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 10px;
        }


        .navbar {
            background: #1e293b;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .navbar a {
            color: white;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #f97316;
        }

        .logout-btn {
            background: #e11d48;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .logout-btn:hover {
            background: #be123c;
        }

        /* Slider */
        .slider-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            height: 400px;
            margin-top: 10px;
        }

        .slider {
            display: flex;
            width: 500%;
            transition: transform 0.5s ease-in-out;
        }

        .slider img {
            width: 100vw;
            height: 400px;
            object-fit: cover;
        }

        /* Slider Buttons */
        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .slider-btn:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }



        /* Alternating Layout */
        .offer-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px 10%;
            gap: 40px;
        }

        .offer-section:nth-child(even) {
            flex-direction: row-reverse;
        }

        .offer-content {
            max-width: 500px;
        }

        .offer-content h3 {
            font-size: 2rem;
            font-weight: bold;
            color: #ff7f50;
        }

        .offer-content p {
            font-size: 1.1rem;
            color: #ccc;
            margin: 10px 0;
        }

        .offer-img {
            width: 450px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        /* Glow Effect on Image Hover */
        .offer-img:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 20px rgba(255, 127, 80, 0.8);
        }

        /* Button Effect */
        .explore-btn {
            display: inline-block;
            padding: 10px 20px;
            background: #ff7f50;
            border-radius: 5px;
            font-weight: bold;
            transition: all 0.3s;
            text-align: center;
        }

        .explore-btn:hover {
            background: #ff5722;
            transform: scale(1.1);
            box-shadow: 0px 0px 15px #ff5722;
        }

        /* Button Styling */
        .main-buttons {
            text-align: center;
            margin-top: 40px;
        }

        .custom-btn {
            display: inline-block;
            margin: 10px;
            padding: 12px 25px;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            background: #ff7f50;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
            text-align: center;
        }

        .custom-btn:hover {
            background: #ff5722;
            transform: scale(1.1);
            box-shadow: 0px 0px 15px #ff5722;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">

    @extends('layouts.app')

    @section('content')

    <nav class="navbar">
        <h2 class="text-xl font-bold">GymFit</h2>
        <div>
            <a href="/dashboard">Dashboard</a>
            <a href="/about">About Us</a>
            <a href="/workouts">Workouts</a>
            <a href="/exercise">Exercises</a>
            <a href="{{ route('profile.show') }}" class="mx-4 hover:text-orange-400">Profile</a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="bg-red-500 px-4 py-2 rounded hover:bg-red-600">
                Logout
            </button>
        </form>

    </nav>
    <div class="slider-container">
        <div class="slider" id="slider">
            <img src="/images/1.webp" alt="Slide 1">
            <img src="/images/2.webp" alt="Slide 2">
            <img src="/images/3.webp" alt="Slide 3">
            <img src="/images/flooring.webp" alt="Slide 4">
            <img src="/images/Main.webp" alt="Slide 5">
        </div>
        <button class="slider-btn prev-btn" onclick="prevSlide()">❮</button>
        <button class="slider-btn next-btn" onclick="nextSlide()">❯</button>
    </div>


    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll(".slider img");
        const totalSlides = slides.length;
        const slider = document.getElementById("slider");

        function showSlide(index) {
            if (index >= totalSlides) {
                currentSlide = 0; 
            } else if (index < 0) {
                currentSlide = totalSlides - 1;
            } else {
                currentSlide = index;
            }
            slider.style.transform = `translateX(-${currentSlide * 100}vw)`;
        }

        function nextSlide() {
            currentSlide++;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide--;
            showSlide(currentSlide);
        }

        setInterval(() => {
            nextSlide();
        }, 3000);
    </script>

    <div class="main-buttons">
        <a href="/workouts" class="custom-btn">Workouts</a>
        <a href="/exercise" class="custom-btn">Exercises</a>
    </div>


    <section class="py-16 bg-gray-900 text-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10">What We Offer</h2>

            <div class="offer-section">
                <div class="offer-content">
                    <h3>Workouts</h3>
                    <p>Personalized training programs to help you build strength and endurance.</p>
                    <a href="{{ route('workouts.info') }}" class="explore-btn bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 transition duration-300 ease-in-out">
                        View More →
                    </a>
                </div>
                <img src="{{ asset('images/workout.webp') }}" alt="Workouts" class="offer-img">
            </div>

            <div class="offer-section">
                <div class="offer-content">
                    <h3>Yoga</h3>
                    <p>Enhance flexibility, reduce stress, and improve mindfulness with expert-led yoga sessions.</p>
                    <a href="{{ route('yoga.index') }}" class="explore-btn bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 transition duration-300 ease-in-out">
                        View More →
                    </a>
                </div>
                <img src="{{ asset('images/yoga.webp') }}" alt="Yoga" class="offer-img">
            </div>

            <div class="offer-section">
                <div class="offer-content">
                    <h3>Nutrition</h3>
                    <p>Get personalized diet plans to complement your fitness goals.</p>
                    <a href="{{ route('nutrition.index') }}" class="explore-btn bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600 transition duration-300 ease-in-out">
                        View More →
                    </a>
                </div>
                <img src="{{ asset('images/nutrition.webp') }}" alt="Nutrition" class="offer-img">
            </div>

        </div>
    </section>
    @include('layouts.footer')

    @endsection

</body>

</html>