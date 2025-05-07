@extends('layouts.app')
@section('content')
    @include('layouts.navbar')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Start Workout | {{ $workout->title }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            body {
                background: linear-gradient(to right, #121212, #1a1a2e);
                color: white;
            }

            .media-box {
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 0 25px rgba(255, 255, 255, 0.15);
                transition: transform 0.3s ease;
            }

            .media-box:hover {
                transform: scale(1.02);
            }

            .workout-section {
                padding: 30px;
                background: #1f2937;
                border-radius: 12px;
                margin-top: 20px;
                box-shadow: 0 0 15px rgba(255, 123, 0, 0.1);
                transition: box-shadow 0.3s ease;
            }

            .workout-section:hover {
                box-shadow: 0 0 25px rgba(255, 123, 0, 0.3);
            }

            .split-section {
                display: flex;
                flex-direction: column;
            }

            @media (min-width: 768px) {
                .split-section {
                    flex-direction: row;
                    gap: 40px;
                }
            }

            .split-img {
                flex: 1;
            }

            .split-img img {
                width: 100%;
                border-radius: 12px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .split-img img:hover {
                transform: scale(1.05);
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            }

            .split-info {
                flex: 1;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .split-info h2 {
                font-size: 26px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .split-info p {
                line-height: 1.6;
                color: #d1d5db;
            }

            .back-btn {
                transition: all 0.3s ease;
            }

            .back-btn:hover {
                transform: scale(1.05);
            }
        </style>
    </head>

    <body class="pt-24">
        <div class="container mx-auto px-6 pb-16">
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg max-w-5xl mx-auto">

                <!-- Title and Description -->
                <h1 class="text-4xl font-bold text-{{ $workout->color }}-400 mb-4">{{ $workout->title }}</h1>
                <p class="text-gray-300 text-lg mb-6">{{ $workout->description }}</p>

                <!-- Video or GIF Section -->
                <div class="media-box mb-10">
                    @if ($workout->video_url)
                        <iframe class="w-full h-96" src="{{ $workout->video_url }}" frameborder="0" allowfullscreen></iframe>
                    @endif
                </div>

                <!-- Workout Instructions Section -->
                @if ($workout->steps)
                    <div class="workout-section mb-10">
                        <h2 class="text-2xl font-semibold mb-4">📝 Workout Instructions</h2>
                        <div class="text-gray-300 leading-relaxed whitespace-pre-line">
                            {!! nl2br(e($workout->steps)) !!}
                        </div>
                    </div>
                @endif

                <!-- New Split Section: Left GIF and Right Extra Information -->
                @if ($workout->gif_image || $workout->extra_info)
                    <div class="split-section mb-12 flex flex-col md:flex-row items-center gap-10">

                        <!-- Left Side: Show GIF Image -->
                        <div class="split-img w-full md:w-1/2">
                            @if ($workout->gif_image)
                                <img src="{{ asset('images/' . $workout->gif_image) }}" alt="Workout Demonstration"
                                    class="rounded-lg shadow-lg transition transform hover:scale-105">
                            @else
                                <img src="{{ asset('images/default-demo.webp') }}" alt="Default Demo"
                                    class="rounded-lg shadow-lg opacity-60">
                            @endif
                        </div>

                        <!-- Right Side: Extra Information -->
                        <div
                            class="split-info w-full md:w-1/2 bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                            <h2 class="text-2xl font-bold text-orange-400 mb-3">✨ Pro Tips & Coach Advice</h2>
                            <p class="text-gray-300 leading-relaxed whitespace-pre-line">
                                {{ $workout->extra_info ?? 'No extra information available. You can include posture guidance, breathing techniques, form instructions, or anything helpful for workout safety and efficiency.' }}
                            </p>
                        </div>

                    </div>
                @endif


                <!-- Back Button -->
                <div class="text-center mt-6">
                    <a href="{{ route('workouts.index') }}"
                        class="back-btn inline-block bg-orange-500 hover:bg-orange-700 text-white px-6 py-2 rounded shadow transition">
                        ← Back to Workouts
                    </a>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </body>

    </html>
@endsection
