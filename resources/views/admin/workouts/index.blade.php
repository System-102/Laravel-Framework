@extends('admin.layout')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-6">📋 Manage Workouts</h2>

    @if (session('success'))
        <div class="bg-green-500 text-white px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-6">
        <a href="{{ route('admin.workouts.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded shadow transition duration-300">
            ➕ Add New Workout
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow text-sm">
            <thead>
                <tr class="bg-gray-800 text-white text-left">
                    <th class="px-4 py-3">Title</th>
                    <th class="px-4 py-3">Image</th>
                    <th class="px-4 py-3">Color</th>
                    <th class="px-4 py-3">Video/GIF</th>
                    <th class="px-4 py-3">Description</th>
                    <th class="px-4 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($workouts as $workout)
                    <tr class="border-b hover:bg-gray-100 text-gray-800">
                        <td class="px-4 py-3 font-semibold">{{ $workout->title }}</td>

                        <td class="px-4 py-3">
                            @if ($workout->image)
                                <img src="{{ asset('images/' . $workout->image) }}" alt="Image" class="h-14 w-20 rounded object-cover">
                            @else
                                <span class="text-gray-400 italic">No image</span>
                            @endif
                        </td>

                        <td class="px-4 py-3 capitalize">{{ $workout->color }}</td>

                        <td class="px-4 py-3">
                            @if ($workout->video_url)
                                <span class="text-green-600 font-medium">🎥 Video</span>
                            @elseif ($workout->gif_image)
                                <span class="text-blue-600 font-medium">🖼️ GIF</span>
                            @else
                                <span class="text-gray-400 italic">N/A</span>
                            @endif
                        </td>

                        <td class="px-4 py-3 text-gray-600">
                            {{ Str::limit(strip_tags($workout->description), 40) }}
                        </td>

                        <td class="px-4 py-3 text-center space-x-2">
                            <a href="{{ route('admin.workouts.edit', $workout->id) }}"
                               class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">
                                ✏️ Edit
                            </a>

                            <form action="{{ route('admin.workouts.destroy', $workout->id) }}" method="POST" class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this workout?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    🗑️ Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-gray-500 py-6">No workouts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
