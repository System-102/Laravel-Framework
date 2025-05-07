@extends('layouts.app')

@section('content')

@include('layouts.navbar')

<div class="relative bg-cover bg-center h-[400px]" style="background-image: url('/images/facilities-bg.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold text-green-400">🏢 World-Class Facilities</h1>
            <p class="text-gray-300 mt-3 text-lg">Train in our state-of-the-art gym with top-tier equipment and a premium environment.</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-10 py-16 text-white">
    <h2 class="text-3xl font-bold text-center text-green-400 border-b-4 border-green-400 inline-block pb-2">💪 Explore Our Facilities</h2>
    
    <div class="grid md:grid-cols-3 gap-8 mt-10">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/gym-equipment.jpg" alt="Gym Equipment" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold text-green-300">🏋️ High-End Equipment</h3>
            <p class="text-gray-400 mt-2">Train with cutting-edge machines and free weights.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/cardio-zone.jpg" alt="Cardio Zone" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold text-green-300">🏃‍♂️ Dedicated Cardio Zone</h3>
            <p class="text-gray-400 mt-2">Boost endurance with treadmills, bikes, and more.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/yoga-room.jpg" alt="Yoga Studio" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold text-green-300">🧘 Spacious Yoga Studio</h3>
            <p class="text-gray-400 mt-2">Relax and rejuvenate in our peaceful yoga space.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/spa-room.jpg" alt="Spa" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold text-green-300">🛀 Luxury Spa & Sauna</h3>
            <p class="text-gray-400 mt-2">Recover faster with our premium sauna and spa.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/personal-training.jpg" alt="Personal Training" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold text-green-300">👨‍🏫 Expert Personal Trainers</h3>
            <p class="text-gray-400 mt-2">Get personalized guidance from top fitness experts.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/nutrition-bar.jpg" alt="Nutrition Bar" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold text-green-300">🥗 Healthy Nutrition Bar</h3>
            <p class="text-gray-400 mt-2">Fuel your workouts with fresh smoothies and meals.</p>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection
