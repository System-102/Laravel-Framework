<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')

@include('layouts.navbar')

<div class="container mx-auto pt-24 fade-in flex justify-center">
    <div class="bg-gray-800 p-8 rounded-lg shadow-xl w-full max-w-md transform hover:scale-105 transition duration-300">

        <h2 class="text-2xl font-bold text-center text-orange-400 mb-4">✏️ Edit Profile</h2>

        @if ($errors->any())
            <div class="text-red-500 bg-red-100 p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            
            <div class="flex flex-col items-center mb-4">
            <img id="profilePreview" 
     src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/default-profile.png') }}"
     class="w-24 h-24 rounded-full border-4 border-orange-500 shadow-lg">

                <input type="file" name="profile_picture" class="mt-2 text-gray-300" id="profilePictureInput">
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-300">👤 Name:</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" required 
                       class="border bg-gray-700 px-3 py-2 w-full rounded text-white">
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-300">✉️ Email:</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" required 
                       class="border bg-gray-700 px-3 py-2 w-full rounded text-white">
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-300">📞 Phone:</label>
                <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" 
                       class="border bg-gray-700 px-3 py-2 w-full rounded text-white">
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-300">🏠 Address:</label>
                <input type="text" name="address" value="{{ old('address', $user->address) }}" 
                       class="border bg-gray-700 px-3 py-2 w-full rounded text-white">
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-300">🔒 New Password (optional):</label>
                <input type="password" name="password" class="border bg-gray-700 px-3 py-2 w-full rounded text-white">
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-300">🔒 Confirm Password:</label>
                <input type="password" name="password_confirmation" class="border bg-gray-700 px-3 py-2 w-full rounded text-white">
            </div>

            <button type="submit" 
                    class="bg-blue-500 text-white px-4 py-2 rounded w-full hover:bg-blue-600 transition duration-300">
                💾 Update Profile
            </button>
        </form>
    </div>
</div>

<script>
    document.getElementById('profilePictureInput').addEventListener('change', function(event) {
        let reader = new FileReader();
        reader.onload = function(){
            let img = document.getElementById('profilePreview');
            img.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    });
</script>

@include('layouts.footer')
@endsection

</body>
</html>