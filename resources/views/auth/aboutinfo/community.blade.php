@extends('layouts.app')

@section('content')

@include('layouts.navbar')

<div class="relative bg-cover bg-center h-[400px]" style="background-image: url('/images/community-bg.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold text-orange-400">🌍 Our Community</h1>
            <p class="text-gray-300 mt-3 text-lg max-w-2xl mx-auto">
                A powerful network of passionate individuals supporting each other on their wellness journey.
            </p>
        </div>
    </div>
</div>

<div class="container mx-auto px-10 py-16 text-white">
    <h2 class="text-3xl font-bold text-center text-orange-400 border-b-4 border-orange-400 inline-block pb-2">🤝 What We Believe In</h2>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">💬 Open Communication</h3>
            <p class="text-gray-400 mt-2">We foster honest, kind, and meaningful interactions among all members.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">🎉 Celebrating Wins</h3>
            <p class="text-gray-400 mt-2">Every milestone matters — we uplift each other’s achievements, big or small.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">🌱 Continuous Growth</h3>
            <p class="text-gray-400 mt-2">We grow together by learning, adapting, and supporting new experiences.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">🧠 Mental Wellness</h3>
            <p class="text-gray-400 mt-2">We prioritize mental health as much as physical fitness in our community.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">🤗 Inclusion & Respect</h3>
            <p class="text-gray-400 mt-2">Everyone deserves a safe space where they feel valued and welcomed.</p>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
            <h3 class="text-xl font-bold text-orange-300">📢 Empowering Voices</h3>
            <p class="text-gray-400 mt-2">We listen, learn, and act to uplift diverse voices and perspectives.</p>
        </div>
    </div>
</div>

<div class="bg-gray-900 py-10 text-center">
    <h3 class="text-2xl font-bold text-orange-300">"Alone we can do so little; together we can do so much." – Helen Keller</h3>
</div>

@include('layouts.footer')

@endsection
