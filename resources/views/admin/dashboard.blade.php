<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #1e293b;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            transition: 0.3s;
        }

        .sidebar a {
            display: block;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #334155;
        }

        /* Top Navbar */
        .top-nav {
            width: calc(100% - 250px);
            margin-left: 250px;
            background: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            background: #f3f4f6;
            min-height: 100vh;
        }

        /* Dashboard Cards */
        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        /* Animations */
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

@include('admin.Menubar')

    <!-- Top Navbar -->
    <div class="top-nav">
        <h2 class="text-xl font-bold">Dashboard</h2>
        <div>
            <span class="mr-4">🔔 Notifications</span>
            <span>👤 Profile</span>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content fade-in">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Revenue Card -->
            <div class="card bg-red-500 text-white">
                <h3 class="text-lg font-bold">Revenue</h3>
                <p class="text-2xl mt-2">$84,198</p>
            </div>

            <!-- Sales Card -->
            <div class="card bg-orange-500 text-white">
                <h3 class="text-lg font-bold">Sales</h3>
                <p class="text-2xl mt-2">36,540</p>
            </div>

            <!-- Products Card -->
            <div class="card bg-blue-500 text-white">
                <h3 class="text-lg font-bold">Products</h3>
                <p class="text-2xl mt-2">24,225</p>
            </div>

            <!-- Visits Card -->
            <div class="card bg-green-500 text-white">
                <h3 class="text-lg font-bold">Visits</h3>
                <p class="text-2xl mt-2">88,658</p>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <!-- Profit Progress -->
            <div class="card">
                <h3 class="text-lg font-bold text-gray-700">Profit</h3>
                <div class="w-full bg-gray-300 rounded-full mt-2">
                    <div class="bg-blue-500 text-xs font-medium text-white text-center p-1 leading-none rounded-full" style="width: 82%"> 82% </div>
                </div>
            </div>

            <!-- Sales Progress -->
            <div class="card">
                <h3 class="text-lg font-bold text-gray-700">Sales</h3>
                <div class="w-full bg-gray-300 rounded-full mt-2">
                    <div class="bg-yellow-500 text-xs font-medium text-white text-center p-1 leading-none rounded-full" style="width: 55%"> 55% </div>
                </div>
            </div>
        </div>

        <!-- Users Donut Chart -->
        <div class="card mt-6">
            <h3 class="text-lg font-bold text-gray-700">Users</h3>
            <div class="flex justify-center mt-4">
                <svg width="150" height="150">
                    <circle cx="75" cy="75" r="50" stroke="red" stroke-width="15" fill="transparent" />
                    <text x="50%" y="50%" text-anchor="middle" dy=".3em" font-size="20" fill="black">30</text>
                </svg>
            </div>
        </div>
    </div>

</body>
</html>
