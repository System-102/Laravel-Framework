@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<!-- 🌟 Hero Section -->
<div class="relative bg-cover bg-center h-[400px]" style="background-image: url('/images/nutrition-bg.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold">🥗 Healthy Nutrition</h1>
            <p class="text-lg mt-3 text-gray-200">Fuel your body with the right nutrients for a healthier life.</p>
            <a href="#" class="mt-4 inline-block bg-yellow-400 text-black px-6 py-3 rounded-lg text-lg font-semibold hover:bg-yellow-500 transition">
                Get Your Diet Plan
            </a>
        </div>
    </div>
</div>

<!-- 🌟 Container -->
<div class="container mx-auto px-10 py-16 text-white">

    <!-- Section: Importance of Nutrition -->
    <div class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-yellow-400 border-b-4 border-yellow-400 inline-block pb-2">🥦 Why is Nutrition Important?</h2>
        <p class="text-gray-400 mt-3">
            Good nutrition boosts energy, strengthens the immune system, supports muscle growth, and helps in disease prevention.
        </p>
    </div>

    <!-- 🌟 Macronutrients Breakdown with Progress Bars -->
    <div class="mt-10">
        <h2 class="text-3xl font-bold text-yellow-400 text-center border-b-4 border-yellow-400 inline-block pb-2">⚖️ Macronutrients Breakdown</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-green-400">🥩 Proteins</h3>
                <p class="text-gray-400">Essential for muscle growth & repair.</p>
                <div class="mt-2 bg-gray-700 h-3 rounded-full">
                    <div class="bg-green-400 h-3 rounded-full w-4/5"></div>
                </div>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-blue-400">🍞 Carbohydrates</h3>
                <p class="text-gray-400">Main energy source for the body.</p>
                <div class="mt-2 bg-gray-700 h-3 rounded-full">
                    <div class="bg-blue-400 h-3 rounded-full w-3/4"></div>
                </div>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-yellow-400">🥑 Healthy Fats</h3>
                <p class="text-gray-400">Supports brain function & hormones.</p>
                <div class="mt-2 bg-gray-700 h-3 rounded-full">
                    <div class="bg-yellow-400 h-3 rounded-full w-2/3"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- 🌟 Diet Plans -->
    <div class="mt-10">
        <h2 class="text-3xl font-bold text-yellow-400 text-center border-b-4 border-yellow-400 inline-block pb-2">🥗 Choose Your Diet Plan</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-red-400">⚖️ Weight Loss</h3>
                <p class="text-gray-400">Low-calorie, high-fiber meals for fat loss.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-green-400">💪 Muscle Gain</h3>
                <p class="text-gray-400">Protein-rich diet for muscle building.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-blue-400">🏃‍♂️ Maintenance</h3>
                <p class="text-gray-400">Balanced meals for sustained health.</p>
            </div>
        </div>
    </div>

    <!-- 🌟 Nutrition Myths Accordion -->
    <div class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-yellow-400 border-b-4 border-yellow-400 inline-block pb-2">🚫 Nutrition Myths Busted</h2>
        
        <div class="mt-4">
            <details class="bg-gray-700 p-4 rounded-lg mb-2">
                <summary class="text-yellow-300 font-semibold cursor-pointer">❌ Myth: Eating fats makes you fat.</summary>
                <p class="text-gray-300 mt-2">✅ Fact: Healthy fats are essential for energy and brain function.</p>
            </details>
            <details class="bg-gray-700 p-4 rounded-lg mb-2">
                <summary class="text-yellow-300 font-semibold cursor-pointer">❌ Myth: Carbs are bad for weight loss.</summary>
                <p class="text-gray-300 mt-2">✅ Fact: Whole carbs (like brown rice) are essential for sustained energy.</p>
            </details>
            <details class="bg-gray-700 p-4 rounded-lg">
                <summary class="text-yellow-300 font-semibold cursor-pointer">❌ Myth: Skipping meals helps lose weight.</summary>
                <p class="text-gray-300 mt-2">✅ Fact: Skipping meals slows metabolism and can lead to overeating.</p>
            </details>
        </div>
    </div>

    <!-- 🌟 Call to Action -->
    <div class="mt-10 text-center">
        <a href="#" class="bg-yellow-400 text-black px-8 py-4 rounded-lg text-lg font-semibold hover:bg-yellow-500 transition">
            Get a Personalized Nutrition Plan
        </a>
    </div>

    <!-- 🌟 Testimonials -->
    <div class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-yellow-400 text-center border-b-4 border-yellow-400 inline-block pb-2">🌟 What People Say</h2>
        <p class="text-center text-gray-300 mt-2">Hear from those who transformed their health with good nutrition.</p>
        
        <div class="mt-6 text-center text-gray-300 italic">
            "Following a balanced diet changed my energy levels and focus! Highly recommend it!" - Alex, Fitness Enthusiast
        </div>
    </div>

</div>

@include('layouts.footer')
@endsection
