<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #141E30, #243B55);
            color: white;
            text-align: center;
            padding: 50px;
        }
        .form-container {
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
        label {
            display: block;
            font-weight: bold;
            margin-top: 12px;
        }
        input[type="text"], input[type="email"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border-radius: 5px;
            border: none;
        }
        .btn {
            display: inline-block;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s ease-in-out;
            margin-top: 15px;
            width: 100%;
        }
        .btn-save {
            background: #ff9800;
            color: white;
        }
        .btn-save:hover {
            background: #ff7b00;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    @include('admin.Menubar')
    <div class="form-container">
        <h2>Edit Profile</h2>

        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" required>

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="{{ auth()->user()->phone ?? '' }}" placeholder="Enter phone number">

            <label for="profile_picture">Profile Picture</label>
            <input type="file" id="profile_picture" name="profile_picture">

            <button type="submit" class="btn btn-save">Save Changes</button>
        </form>
    </div>

</body>
</html>
