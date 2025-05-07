<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Fixed Navbar */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px 0;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <nav class="navbar fixed top-0 left-0 w-full bg-gray-900 text-white flex justify-between items-center px-10 py-4 shadow-md">
        <h2 class="text-xl font-bold">GymFit</h2>
        <div>
            <a href="/dashboard" class="mx-4 hover:text-orange-400">Dashboard</a>
            <a href="/about" class="mx-4 hover:text-orange-400">About Us</a>
            <a href="/workouts" class="mx-4 hover:text-orange-400">Workouts</a>
            <a href="/exercise" class="mx-4 hover:text-orange-400">Exercises</a>
            <a href="{{ route('profile.show') }}" class="mx-4 hover:text-orange-400">Profile</a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="bg-red-500 px-4 py-2 rounded hover:bg-red-600">
                Logout
            </button>
        </form>

    </nav>

</body>

</html>