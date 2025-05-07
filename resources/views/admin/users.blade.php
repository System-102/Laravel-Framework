<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Page Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 20px;
        }

        /* Page Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #1e293b;
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeIn 0.5s ease-out forwards;
        }

        /* Table Styling */
        .user-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .user-table th, .user-table td {
            padding: 15px;
            text-align: left;
        }
        .user-table thead {
            background: #1e293b;
            color: white;
        }

        /* Table Row Animation */
        .user-table tbody tr {
            transition: all 0.3s ease-in-out;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInRow 0.5s ease-out forwards;
        }

        /* Delay animation for each row */
        .user-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
        .user-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
        .user-table tbody tr:nth-child(3) { animation-delay: 0.3s; }
        .user-table tbody tr:nth-child(4) { animation-delay: 0.4s; }

        /* Hover Effect */
        .user-table tbody tr:hover {
            background: #e2e8f0;
            transform: scale(1.02);
        }

        /* Buttons */
        .edit-btn, .delete-btn {
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s, background 0.3s;
        }
        .edit-btn {
            background: #3b82f6;
            color: white;
        }
        .edit-btn:hover {
            background: #2563eb;
            transform: scale(1.1);
        }
        .delete-btn {
            background: #ef4444;
            color: white;
            margin-left: 5px;
        }
        .delete-btn:hover {
            background: #dc2626;
            transform: scale(1.1);
        }

        /* Fade In Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInRow {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

@include('admin.Menubar')


    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ ucfirst($user->role) }}</td>
                <td>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
