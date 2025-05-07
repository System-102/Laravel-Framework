<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>


        /* Main Content */
        .main-content {
            margin-left: 260px;
            padding: 20px;
            background: #f3f4f6;
            min-height: 100vh;
            transition: margin-left 0.3s ease-in-out;
        }

        /* Page Title */
        .page-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1e293b;
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.6s ease-in-out, transform 0.6s ease-in-out;
        }

        /* Admin Cards */
        .admin-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .admin-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }


    </style>
</head>
<body>

   @include('admin.Menubar')

    <div class="main-content">
        <h1 class="page-title">Welcome, Admin!</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="admin-card">
                <h3 class="text-xl font-bold text-blue-500">Total Users</h3>
                <p class="text-gray-600 mt-2">Manage registered users and their activities.</p>
                <a href="{{ route('admin.users') }}" class="text-blue-500 mt-4 inline-block">View Details →</a>
            </div>

            <div class="admin-card">
                <h3 class="text-xl font-bold text-green-500">Manage Workouts</h3>
                <p class="text-gray-600 mt-2">Monitor and manage gym trainers.</p>
                <a href="{{ route('admin.workouts.index') }}" class="text-green-500 mt-4 inline-block">View Details →</a>
            </div>

            <div class="admin-card">
                <h3 class="text-xl font-bold text-yellow-500"> Profile</h3>
                <p class="text-gray-600 mt-2">Check analytics and business reports.</p>
                <a href="{{ route('admin.profile.index') }}" class="text-yellow-500 mt-4 inline-block">View Profile →</a>
            </div>
        </div>
    </div>

</body>
</html>
