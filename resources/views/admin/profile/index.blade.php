<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #141E30, #243B55);
            color: white;
            text-align: center;
            padding: 50px;
        }
        .profile-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 15px;
            width: 450px;
            margin: auto;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
            text-align: center;
        }
        h2 {
            color: #ff9800;
            font-size: 24px;
        }
        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            display: block;
            margin: 15px auto;
            border: 4px solid #ff9800;
            box-shadow: 0 0 15px rgba(255, 152, 0, 0.6);
        }
        .details {
            text-align: left;
            margin-top: 10px;
        }
        .details p {
            font-size: 16px;
            line-height: 1.8;
            color: #ddd;
            padding: 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
        }
        .btn {
            display: inline-block;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s ease-in-out;
            cursor: pointer;
            margin: 10px 5px;
            width: 150px;
        }
        .btn-edit {
            background: #ff9800;
            color: white;
        }
        .btn-edit:hover {
            background: #ff7b00;
            transform: scale(1.1);
        }
        .btn-logout {
            background: red;
            color: white;
        }
        .btn-logout:hover {
            background: darkred;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    @include('admin.Menubar')
    <div class="profile-container">
        <h2>Admin Profile</h2>
 
        <img src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : asset('default-profile.png') }}" 
     alt="Profile Picture" class="profile-pic">


        <div class="details">
            <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            <p><strong>Phone:</strong> {{ auth()->user()->phone ?? 'Not Added' }}</p>
            <p><strong>Role:</strong> {{ ucfirst(auth()->user()->role) }}</p>
            <p><strong>Last Login:</strong> {{ auth()->user()->last_login ? auth()->user()->last_login->diffForHumans() : 'Not Available' }}</p>
            <p><strong>Joined:</strong> {{ auth()->user()->created_at->format('F d, Y') }}</p>
        </div>

        <div>
            <a href="{{ route('admin.profile.edit') }}" class="btn btn-edit">Edit Profile</a>

            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-logout">Logout</button>
            </form>
        </div>
    </div>

</body>
</html>
