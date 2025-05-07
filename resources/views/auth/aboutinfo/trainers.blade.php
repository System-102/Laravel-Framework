@extends('layouts.app')

@section('content')

@include('layouts.navbar')

<div class="relative bg-cover bg-center h-[400px]" style="background-image: url('/images/trainers-bg.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold text-blue-400">🏋️‍♂️ Meet Our Expert Trainers</h1>
            <p class="text-gray-300 mt-3 text-lg max-w-2xl mx-auto">
                Our certified trainers are here to guide you through your fitness journey.
            </p>
        </div>
    </div>
</div>

<div class="container mx-auto px-10 py-16 text-white">
    <h2 class="text-3xl font-bold text-center text-blue-400 border-b-4 border-blue-400 inline-block pb-2">💪 Our Top Trainers</h2>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/trainer1.jpg" alt="Trainer 1" class="w-32 h-32 mx-auto rounded-full shadow-md">
            <h3 class="text-xl font-bold text-blue-300 mt-4">Armin Patel</h3>
            <p class="text-gray-400">Certified Strength Coach</p>
            <p class="text-gray-400 mt-2">Specializes in weightlifting and strength training.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/trainer2.jpg" alt="Trainer 2" class="w-32 h-32 mx-auto rounded-full shadow-md">
            <h3 class="text-xl font-bold text-blue-300 mt-4">Kamlesh Thakor</h3>
            <p class="text-gray-400">Yoga & Wellness Coach</p>

            <p class="text-gray-400 mt-2">Expert in mindfulness, flexibility, and holistic health.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/trainer3.jpg" alt="Trainer 3" class="w-32 h-32 mx-auto rounded-full shadow-md">
            <h3 class="text-xl font-bold text-blue-300 mt-4">Khushi Rawat</h3>
            <p class="text-gray-400">HIIT & Cardio Specialist</p>
            <p class="text-gray-400 mt-2">Focuses on fat loss and endurance training.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/trainer4.jpg" alt="Trainer 4" class="w-32 h-32 mx-auto rounded-full shadow-md">
            <h3 class="text-xl font-bold text-blue-300 mt-4">Drashti Patel</h3>
            <p class="text-gray-400">Nutrition & Diet Expert</p>
            <p class="text-gray-400 mt-2">Provides meal plans tailored for fitness goals.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/trainer5.jpg" alt="Trainer 5" class="w-32 h-32 mx-auto rounded-full shadow-md">
            <h3 class="text-xl font-bold text-blue-300 mt-4">Dharmesh Thakkar</h3>
            <p class="text-gray-400">Personal Trainer</p>
            <p class="text-gray-400 mt-2">Specialist in body transformation and endurance.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <img src="/images/trainer6.jpg" alt="Trainer 6" class="w-32 h-32 mx-auto rounded-full shadow-md">
            <h3 class="text-xl font-bold text-blue-300 mt-4">Raj Vaghani</h3>
            <p class="text-gray-400">Functional Training Coach</p>
            <p class="text-gray-400 mt-2">Focuses on flexibility, mobility, and injury prevention.</p>
        </div>
    </div>
</div>

<div class="bg-gray-900 py-10 text-center">
    <h3 class="text-2xl font-bold text-blue-300">"A good trainer doesn't just change your body, they change your mindset!"</h3>
</div>

@include('layouts.footer')

@endsection
