<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Sidebar Styling */
        .sidebar {
            width: 240px;
            height: 100vh;
            background: #1e293b;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            transition: transform 0.25s ease-in-out, box-shadow 0.3s ease-in-out;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Ensures logout button is at the bottom */
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Sidebar Links */
        .sidebar a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 18px;
            color: white;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
            font-size: 16px;
            font-weight: 500;
        }

        .sidebar a:hover {
            background: #475569;
            transform: scale(1.05);
            padding-left: 22px;
        }

        /* Sidebar Toggle Button */
        .toggle-btn {
            position: absolute;
            top: 15px;
            right: -35px;
            width: 35px;
            height: 35px;
            background: #334155;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            line-height: 35px;
            transition: background 0.3s ease-in-out;
            font-size: 20px;
        }

        .toggle-btn:hover {
            background: #475569;
        }

        /* Sidebar Animation */
        .collapsed {
            transform: translateX(-100%);
            box-shadow: none;
        }


        /* Logout Button Styling */
        .logout-btn {
            background: #ef4444;
            color: white;
            text-align: center;
            padding: 10px 18px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
            margin: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: auto;
            /* Pushes logout button to bottom */
        }

        .logout-btn:hover {
            background: #dc2626;
            transform: scale(1.05);
        }

        .logout-icon {
            margin-right: 8px;
            font-size: 18px;
        }
    </style>
</head>

<body>

    <div class="sidebar" id="sidebar">
        <div>
            <h2 class="text-center text-lg font-bold mb-6">⚡ Admin Panel</h2>
            <div class="toggle-btn" onclick="toggleSidebar()">☰</div>

            <a href="{{ route('admin.dashboard') }}" class="menu-link">🏠 Admin Dashboard</a>
            <a href="{{ route('admin.users') }}" class="menu-link">👥 Users</a>
            <a href="{{ route('admin.profile.index') }}" class="menu-link">👤 Profile</a>
            <a href="{{ route('admin.workouts.index') }}" class="menu-link px-4 py-2 rounded hover:bg-gray-700 transition">📋 Manage Workouts</a>
        </div>

        <a href="{{ route('logout') }}" 
            onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();" class="logout-btn">
            <span class="logout-icon">🚪</span> Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </div>


    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("collapsed");

            localStorage.setItem("sidebarState", sidebar.classList.contains("collapsed") ? "collapsed" : "expanded");
        }

        document.querySelectorAll('.menu-link').forEach(link => {
            link.addEventListener('click', function() {
                setTimeout(() => {
                    document.getElementById("sidebar").classList.add("collapsed");
                    localStorage.setItem("sidebarState", "collapsed");
                }, 150); 
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            if (localStorage.getItem("sidebarState") === "collapsed") {
                document.getElementById("sidebar").classList.add("collapsed");
            }
        });
    </script>

</body>

</html>
