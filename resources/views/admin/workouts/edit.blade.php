@extends('admin.layout')

@section('content')
    <h2 class="text-xl font-bold mb-6">✏️ Edit Workout</h2>

    @if ($errors->any())
        <div class="text-red-500 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.workouts.update', $workout->id) }}" method="POST" enctype="multipart/form-data"
        class="bg-white text-black p-6 rounded shadow-lg w-full max-w-2xl">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Title</label>
            <input type="text" name="title" value="{{ $workout->title }}" class="w-full px-4 py-2 border rounded"
                required>
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Description</label>
            <textarea name="description" rows="3" class="w-full px-4 py-2 border rounded">{{ $workout->description }}</textarea>
        </div>

        <!-- Extra Information -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">📘 Extra Information (Tips / Guidance)</label>
            <textarea name="extra_info" rows="5"
                class="w-full px-4 py-2 rounded text-black border">{{ old('extra_info', $workout->extra_info ?? '') }}</textarea>
        </div>


        <!-- Color -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Color</label>
            <select name="color" class="w-full px-4 py-2 border rounded" required>
                <option value="orange" @if ($workout->color == 'orange') selected @endif>Orange</option>
                <option value="blue" @if ($workout->color == 'blue') selected @endif>Blue</option>
                <option value="green" @if ($workout->color == 'green') selected @endif>Green</option>
                <option value="red" @if ($workout->color == 'red') selected @endif>Red</option>
            </select>
        </div>

        <!-- Main Image -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Current Image</label>
            @if ($workout->image)
                <img src="{{ asset('images/' . $workout->image) }}" alt="Workout Image"
                    class="w-32 h-20 object-cover rounded mb-2">
            @endif
            <input type="file" name="image" accept="image/*" class="w-full">
        </div>

        <!-- GIF -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">GIF Image</label>
            @if ($workout->gif_image)
                <img src="{{ asset('images/' . $workout->gif_image) }}" alt="Workout GIF"
                    class="w-32 h-20 object-cover rounded mb-2">
            @endif
            <input type="file" name="gif_image" accept="image/gif" class="w-full">
        </div>

        <!-- Video URL -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">YouTube Video URL</label>
            <input type="text" name="video_url" value="{{ $workout->video_url }}"
                class="w-full px-4 py-2 border rounded">
        </div>

        <!-- Steps -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Workout Steps</label>
            <textarea name="steps" rows="4" class="w-full px-4 py-2 border rounded">{{ $workout->steps }}</textarea>
        </div>

        <!-- Benefits -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">✨ Benefits</label>
            <textarea name="benefits" rows="2" class="w-full px-4 py-2 border rounded">{{ $workout->benefits }}</textarea>
        </div>

        <!-- Duration -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">⏱ Duration</label>
            <input type="text" name="duration" value="{{ $workout->duration }}" class="w-full px-4 py-2 border rounded">
        </div>

        <!-- Level -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">🎯 Level</label>
            <select name="level" class="w-full px-4 py-2 border rounded">
                <option value="">Select level</option>
                <option value="beginner" @if ($workout->level == 'beginner') selected @endif>Beginner</option>
                <option value="intermediate" @if ($workout->level == 'intermediate') selected @endif>Intermediate</option>
                <option value="advanced" @if ($workout->level == 'advanced') selected @endif>Advanced</option>
            </select>
        </div>

        <!-- Target Muscles -->
        <div class="mb-6">
            <label class="block font-semibold mb-2">💪 Target Muscles</label>
            <input type="text" name="target_muscles" value="{{ $workout->target_muscles }}"
                class="w-full px-4 py-2 border rounded">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2 rounded">
            Update Workout
        </button>
    </form>
@endsection
