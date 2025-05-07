@extends('layouts.app')
@section('content')
@include('layouts.navbar')

<style>
    .detail-section {
        background: #1f2937;
        border-radius: 12px;
        padding: 30px;
        margin-top: 20px;
        box-shadow: 0 0 20px rgba(255, 123, 0, 0.1);
        transition: all 0.3s ease;
    }

    .detail-section:hover {
        box-shadow: 0 0 30px rgba(255, 123, 0, 0.25);
    }

    .badge {
        background-color: rgba(255, 255, 255, 0.1);
        padding: 10px 15px;
        border-radius: 8px;
        font-weight: 500;
        margin-top: 6px;
        transition: background 0.3s ease;
    }

    .badge:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }
</style>

<div class="min-h-screen bg-gray-900 text-white pt-28 px-4 pb-20">
    <div class="max-w-6xl mx-auto bg-gray-800 p-8 rounded-lg shadow-lg">

        <div class="flex flex-col md:flex-row items-center md:items-start gap-10">
            <!-- Workout Image -->
            <img src="{{ asset('images/' . $workout->image) }}" alt="{{ $workout->title }}"
                class="w-full md:w-1/2 h-72 object-cover rounded-lg shadow-md transition hover:scale-105">

            <!-- Workout Info -->
            <div class="md:w-1/2">
                <h2 class="text-4xl font-bold text-{{ $workout->color }}-400 mb-4">{{ $workout->title }}</h2>
                <p class="text-gray-300 text-lg mb-6">{{ $workout->description }}</p>

                <!-- Full Details -->
                @if ($workout->details)
                    <div class="detail-section">
                        <h3 class="text-xl font-semibold text-white mb-3">📝 Full Workout Instructions</h3>
                        <p class="text-gray-300 leading-relaxed whitespace-pre-line">{{ $workout->details }}</p>
                    </div>
                @endif

                <!-- Benefits -->
                @if ($workout->benefits)
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold text-white mb-1">✨ Benefits</h3>
                        <p class="text-gray-300 badge">{{ $workout->benefits }}</p>
                    </div>
                @endif

                <!-- Meta Info -->
                <div class="grid grid-cols-2 gap-4 text-gray-300 mt-6">
                    @if ($workout->duration)
                        <div class="badge"><strong>⏱ Duration:</strong> {{ $workout->duration }}</div>
                    @endif
                    @if ($workout->level)
                        <div class="badge"><strong>🎯 Level:</strong> {{ ucfirst($workout->level) }}</div>
                    @endif
                    @if ($workout->target_muscles)
                        <div class="badge"><strong>💪 Target Muscles:</strong> {{ $workout->target_muscles }}</div>
                    @endif
                </div>

                <!-- Start Button -->
                <a href="{{ route('workouts.start', $workout->id) }}"
                    class="mt-8 inline-block bg-{{ $workout->color }}-500 hover:bg-{{ $workout->color }}-600 text-white px-6 py-3 rounded-lg shadow-lg font-semibold transition transform hover:scale-105">
                    🏁 Start Workout
                </a>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection
