@extends('layouts.app')

@section('content')

@include('layouts.navbar')

<div class="relative bg-cover bg-center h-[400px]" style="background-image: url('/images/mission-bg.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold text-orange-400">🚀 Our Mission</h1>
            <p class="text-gray-300 mt-3 text-lg max-w-2xl mx-auto">
                Empowering individuals to achieve their fitness goals through expert guidance, innovation, and a supportive community.
            </p>
        </div>
    </div>
</div>

<div class="container mx-auto px-10 py-16 text-white">
    <h2 class="text-3xl font-bold text-center text-orange-400 border-b-4 border-orange-400 inline-block pb-2">🔥 What Drives Us</h2>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">💡 Innovation in Fitness</h3>
            <p class="text-gray-400 mt-2">We embrace cutting-edge training methods and technologies to enhance workouts.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">💪 Strength & Endurance</h3>
            <p class="text-gray-400 mt-2">Helping members build resilience through science-backed fitness programs.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">🌍 Community Support</h3>
            <p class="text-gray-400 mt-2">Creating a welcoming environment where everyone can thrive together.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">📚 Knowledge & Expertise</h3>
            <p class="text-gray-400 mt-2">Providing top-tier guidance from experienced trainers and nutritionists.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">🔑 Accessibility for All</h3>
            <p class="text-gray-400 mt-2">Making fitness achievable for people of all backgrounds and abilities.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">🎯 Goal-Oriented Training</h3>
            <p class="text-gray-400 mt-2">Customizing fitness plans to match every individual's unique objectives.</p>
        </div>
    </div>
</div>

<div class="bg-gray-900 py-10 text-center">
    <h3 class="text-2xl font-bold text-orange-300">"Fitness is not about being better than someone else. It's about being better than you used to be."</h3>
</div>

@include('layouts.footer')

@endsection
