<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel | GymFit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="p-6">
        @include('admin.Menubar') <!-- Include your sidebar/navbar if needed -->
        <div class="ml-60 mt-10">
            @yield('content')
        </div>
    </div>
</body>
</html>
