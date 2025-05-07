@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<!-- 🌿 Hero Section -->
<div class="relative bg-cover bg-center h-[400px]" style="background-image: url('/images/yoga-bg.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold">🧘 Find Your Inner Peace</h1>
            <p class="text-lg mt-3 text-gray-200">Embrace mindfulness, flexibility, and strength with yoga.</p>
            <a href="#" class="mt-4 inline-block bg-green-400 text-black px-6 py-3 rounded-lg text-lg font-semibold hover:bg-green-500 transition">
                Start Your Yoga Journey
            </a>
        </div>
    </div>
</div>

<!-- 🌿 Container -->
<div class="container mx-auto px-10 py-16 text-white">

    <!-- Section: Why Yoga? -->
    <div class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-green-400 border-b-4 border-green-400 inline-block pb-2">🌱 Why Yoga Matters?</h2>
        <p class="text-gray-400 mt-3">
            Yoga is not just a workout; it's a way to connect the body, mind, and spirit. It enhances flexibility, reduces stress, and promotes inner peace.
        </p>
    </div>

    <!-- 🌿 Yoga Levels (Grid Layout) -->
    <div class="mt-10">
        <h2 class="text-3xl font-bold text-green-400 text-center border-b-4 border-green-400 inline-block pb-2">🌿 Yoga Levels</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-blue-400">🌼 Beginner Yoga</h3>
                <p class="text-gray-400">Master the foundational poses to improve flexibility and balance.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-yellow-400">🔥 Power Yoga</h3>
                <p class="text-gray-400">A dynamic practice focusing on strength and stamina.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-purple-400">🧘‍♀️ Advanced Yoga</h3>
                <p class="text-gray-400">Deepen your practice with expert guidance and complex poses.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-pink-400">🌙 Restorative Yoga</h3>
                <p class="text-gray-400">Slow, relaxing movements to unwind and relieve stress.</p>
            </div>
        </div>
    </div>

    <!-- 🌿 Yoga Benefits Section -->
    <div class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-green-400 text-center border-b-4 border-green-400 inline-block pb-2">🌟 Benefits of Yoga</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="text-center p-6 bg-gray-700 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-green-300">💆‍♂️ Stress Relief</h3>
                <p class="text-gray-400 mt-2">Reduce anxiety and promote relaxation.</p>
            </div>
            <div class="text-center p-6 bg-gray-700 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-blue-300">🤸‍♀️ Flexibility</h3>
                <p class="text-gray-400 mt-2">Enhance mobility and prevent injuries.</p>
            </div>
            <div class="text-center p-6 bg-gray-700 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-purple-300">🩺 Health Boost</h3>
                <p class="text-gray-400 mt-2">Improve circulation and heart health.</p>
            </div>
        </div>
    </div>

    <!-- 🌿 Embedded Yoga Video -->
    <div class="mt-10 text-center">
        <h2 class="text-3xl font-bold text-green-400 text-center border-b-4 border-green-400 inline-block pb-2">🎥 Watch & Learn</h2>
        <p class="text-gray-400 mt-2">Follow along with this guided yoga session.</p>
        <div class="mt-6">
            <iframe class="w-full md:w-2/3 mx-auto h-64 md:h-80 rounded-lg shadow-lg" src="https://www.youtube.com/embed/v7AYKMP6rOE" allowfullscreen></iframe>
        </div>
    </div>

    <!-- 🌿 Call to Action -->
    <div class="mt-10 text-center">
        <a href="#" class="bg-green-400 text-black px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-500 transition">
            Join a Yoga Class Today
        </a>
    </div>

    <!-- 🌿 Testimonials -->
    <div class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-green-400 text-center border-b-4 border-green-400 inline-block pb-2">🌟 What Our Students Say</h2>
        <p class="text-center text-gray-300 mt-2">Hear how yoga changed their lives.</p>
        
        <div class="mt-6 text-center text-gray-300 italic">
            "Yoga has transformed my body and mind. I feel more energetic and at peace every day!" - Sarah, Yoga Enthusiast
        </div>
    </div>

</div>

@include('layouts.footer')
@endsection
