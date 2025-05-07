@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<!-- 💪 Hero Section -->
<div class="relative bg-cover bg-center h-[400px]" style="background-image: url('/images/workout-bg.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold">🏋️ Push Your Limits</h1>
            <p class="text-lg mt-3 text-gray-200">Discover training programs to build strength and endurance.</p>
            <a href="#" class="mt-4 inline-block bg-red-500 text-black px-6 py-3 rounded-lg text-lg font-semibold hover:bg-red-600 transition">
                Start Your Training Now
            </a>
        </div>
    </div>
</div>

<!-- 💪 Container -->
<div class="container mx-auto px-10 py-16 text-white">

    <!-- Section: Why Workouts? -->
    <div class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-red-500 border-b-4 border-red-500 inline-block pb-2">🔥 Why Workout?</h2>
        <p class="text-gray-400 mt-3">
            Regular exercise improves strength, endurance, and mental well-being. Achieve your fitness goals with the right workout plan.
        </p>
    </div>

    <!-- 💪 Workout Categories (Grid Layout) -->
    <div class="mt-10">
        <h2 class="text-3xl font-bold text-red-500 text-center border-b-4 border-red-500 inline-block pb-2">🏋️ Workout Categories</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-yellow-400">🏋️ Strength Training</h3>
                <p class="text-gray-400">Increase muscle power with weightlifting exercises.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-blue-400">💓 Cardio Workouts</h3>
                <p class="text-gray-400">Boost endurance and heart health with dynamic workouts.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-green-400">🏃‍♂️ HIIT</h3>
                <p class="text-gray-400">Short bursts of intense workouts for maximum fat burn.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-purple-400">🧘 Mobility & Flexibility</h3>
                <p class="text-gray-400">Improve range of motion and reduce injuries.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-orange-400">🏆 Functional Training</h3>
                <p class="text-gray-400">Train for real-life movements and full-body strength.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-pink-400">🦵 Lower Body Workouts</h3>
                <p class="text-gray-400">Strengthen legs with squats, lunges, and deadlifts.</p>
            </div>
        </div>
    </div>

    <!-- 💪 Workout Benefits Section -->
    <div class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-red-500 text-center border-b-4 border-red-500 inline-block pb-2">💡 Benefits of Regular Workouts</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="text-center p-6 bg-gray-700 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-yellow-300">🔥 Fat Burn</h3>
                <p class="text-gray-400 mt-2">Lose weight and tone your body effectively.</p>
            </div>
            <div class="text-center p-6 bg-gray-700 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-blue-300">💪 Muscle Gain</h3>
                <p class="text-gray-400 mt-2">Build muscle and improve overall strength.</p>
            </div>
            <div class="text-center p-6 bg-gray-700 rounded-lg shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-bold text-green-300">🧠 Mental Health</h3>
                <p class="text-gray-400 mt-2">Reduce stress and boost confidence.</p>
            </div>
        </div>
    </div>
  <!-- 💪 Embedded Workout Video -->
  <div class="mt-10 text-center">
    <h2 class="text-3xl font-bold text-red-500 text-center border-b-4 border-red-500 inline-block pb-2">🎥 Watch & Train</h2>
    <p class="text-gray-400 mt-2">Follow this guided workout session.</p>
    <div class="mt-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/k5I6nRfBt1k?si=bw4UB4_Kvs2C6_bp" title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="w-full md:w-2/3 mx-auto h-64 md:h-80 rounded-lg shadow-lg"></iframe>
    </div>
</div>
    <!-- 💪 Call to Action -->
    <div class="mt-10 text-center">
        <a href="#" class="bg-red-500 text-black px-8 py-4 rounded-lg text-lg font-semibold hover:bg-red-600 transition">
            Get Your Workout Plan
        </a>
    </div>

    <!-- 💪 Testimonials -->
    <div class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-red-500 text-center border-b-4 border-red-500 inline-block pb-2">🏆 What Our Members Say</h2>
        <p class="text-center text-gray-300 mt-2">Real stories from real fitness enthusiasts.</p>
        
        <div class="mt-6 text-center text-gray-300 italic">
            "My strength and stamina have skyrocketed! The workouts are intense but effective!" - Alex, Fitness Enthusiast
        </div>
    </div>

</div>

@include('layouts.footer')
@endsection
