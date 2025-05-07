@extends('admin.layout')

@section('content')
<h2 class="text-xl font-bold mb-6 text-black text-center">➕ Add New Workout</h2>

@if ($errors->any())
    <div class="text-red-500 mb-4">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.workouts.store') }}" method="POST" enctype="multipart/form-data"
    class="bg-white text-black p-6 rounded shadow-lg w-full max-w-2xl mx-auto">
    @csrf

    <!-- Title -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">Title</label>
        <input type="text" name="title" class="w-full px-4 py-2 border rounded" required>
    </div>

    <!-- Description -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">Description</label>
        <textarea name="description" rows="3" class="w-full px-4 py-2 border rounded" required></textarea>
    </div>

    <!-- Extra Info -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">📘 Extra Information (Tips / Guidance)</label>
        <textarea name="extra_info" rows="5" class="w-full px-4 py-2 border rounded"
                  placeholder="E.g. Breathe deeply, engage your core, don't rush reps..."></textarea>
    </div>

    <!-- Color -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">Color</label>
        <select name="color" class="w-full px-4 py-2 border rounded" required>
            <option value="orange">Orange</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="red">Red</option>
        </select>
    </div>

    <!-- Workout Image -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">Workout Image</label>
        <input type="file" name="image" accept="image/*" class="w-full">
    </div>

    <!-- GIF Image -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">GIF Image</label>
        <input type="file" name="gif_image" accept="image/gif" class="w-full">
    </div>

    <!-- Video URL -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">YouTube Video URL</label>
        <input type="text" name="video_url" class="w-full px-4 py-2 border rounded">
    </div>

    <!-- Instructions -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">Workout Instructions</label>
        <textarea name="steps" rows="4" class="w-full px-4 py-2 border rounded"></textarea>
    </div>

    <!-- Benefits -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">✨ Benefits</label>
        <textarea name="benefits" rows="2" class="w-full px-4 py-2 border rounded"></textarea>
    </div>

    <!-- Duration -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">⏱ Duration</label>
        <input type="text" name="duration" class="w-full px-4 py-2 border rounded" placeholder="e.g. 4 Days/Week, 30-45 mins">
    </div>

    <!-- Level -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">🎯 Level</label>
        <select name="level" class="w-full px-4 py-2 border rounded">
            <option value="">Select level</option>
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>
    </div>

    <!-- Target Muscles -->
    <div class="mb-6">
        <label class="block font-semibold mb-2">💪 Target Muscles</label>
        <input type="text" name="target_muscles" class="w-full px-4 py-2 border rounded" placeholder="e.g. Chest, Arms, Core">
    </div>

    <!-- Submit -->
    <div class="text-center">
        <button type="submit"
            class="bg-green-600 hover:bg-green-700 text-white font-bold px-8 py-2 rounded shadow transition">
            ✅ Create Workout
        </button>
    </div>
</form>
@endsection
