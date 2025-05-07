<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Fade-in Animation */
.fade-in {
    animation: fadeIn 1s ease-in-out;
}
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Profile Card Styling */
.profile-card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    cursor: pointer;
}
.profile-card:hover {
    transform: scale(1.05);
    box-shadow: 0px 0px 20px rgba(255, 165, 0, 0.5);
}

/* Glow Effect on Hover */
.stat-box {
    transition: background 0.3s ease-in-out, transform 0.3s ease-in-out;
}
.stat-box:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: scale(1.02);
}

/* List Animation */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-10px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
.animate-list li {
    animation: slideIn 0.5s ease-in-out forwards;
    opacity: 0;
}
.animate-list li:nth-child(1) { animation-delay: 0.2s; }
.animate-list li:nth-child(2) { animation-delay: 0.4s; }
.animate-list li:nth-child(3) { animation-delay: 0.6s; }

/* Button Hover Effects */
button:hover, a:hover {
    transition: all 0.3s ease-in-out;
}

/* Profile Card Hover Effect */
.profile-card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    cursor: pointer;
}
.profile-card:hover {
    transform: scale(1.05);
    box-shadow: 0px 0px 20px rgba(255, 165, 0, 0.5); /* Orange Glow */
    border: 2px solid rgba(255, 165, 0, 0.8);
}

    </style>
</head>
<body>@extends('layouts.app')

@section('content')

@include('layouts.navbar')
<div class="container mx-auto pt-24 fade-in flex justify-center">
    <div class="bg-gray-800 p-8 rounded-lg shadow-xl w-full max-w-md profile-card transform transition duration-300 hover:scale-105 hover:shadow-2xl border border-gray-700">

        <div class="relative w-24 h-24 mx-auto">
            <img src="{{ asset('storage/' . ($user->profile_picture ?? 'images/default-profile.png')) }}" 
                 alt="Profile Picture" 
                 class="w-full h-full rounded-full border-4 border-orange-500 shadow-lg hover:shadow-orange-500 transition duration-300">
        </div>

        <h2 class="text-2xl font-bold mt-4 text-orange-400">{{ $user->name }}</h2>
        <p class="text-gray-300 text-sm">{{ $user->email }}</p>

        <div class="mt-4 space-y-2 text-gray-300">
            <p><span class="font-semibold text-orange-300">📞 Phone:</span> {{ $user->phone ?? 'N/A' }}</p>
            <p><span class="font-semibold text-orange-300">🏠 Address:</span> {{ $user->address ?? 'N/A' }}</p>
        </div>

        <div class="mt-6 p-3 rounded stat-box bg-gray-700 shadow-md hover:bg-gray-600 transition duration-300">
            <h3 class="text-lg font-semibold text-orange-400">🏋️ Membership Status</h3>
            <p class="text-green-400 font-bold">Active</p>
            <p class="text-sm text-gray-300">Valid Until: 30th June 2025</p>
        </div>

        <div class="mt-4 p-3 rounded stat-box bg-gray-700 shadow-md hover:bg-gray-600 transition duration-300">
            <h3 class="text-lg font-semibold text-orange-400">🔥 Workout Progress</h3>
            <p class="text-gray-300">Total Workouts: <span class="font-bold text-orange-300">45</span></p>
            <p class="text-gray-300">Calories Burned: <span class="font-bold text-orange-300">12,000 kcal</span></p>
        </div>

        <div class="mt-4 p-3 rounded stat-box bg-gray-700 shadow-md hover:bg-gray-600 transition duration-300">
            <h3 class="text-lg font-semibold text-orange-400">🏆 Achievements</h3>
            <ul class="text-gray-300 text-sm mt-2 list-disc pl-5 animate-list">
                <li>✅ Completed 30-Day Fitness Challenge</li>
                <li>🔥 Burned 10,000+ Calories</li>
                <li>💪 Consistent 3-Month Attendance</li>
            </ul>
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('profile.edit') }}" 
               class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-600 hover:scale-105 transition text-center shadow-lg w-1/2 mx-1">
                ✏️ Edit Profile
            </a>
            <a href="{{ route('logout') }}" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
               class="bg-red-500 px-4 py-2 rounded hover:bg-red-600 hover:scale-105 transition text-center shadow-lg w-1/2 mx-1">
                🚪 Logout
            </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>
</div>

@include('layouts.footer')

@endsection

</body>
</html>