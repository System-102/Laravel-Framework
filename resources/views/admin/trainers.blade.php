<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Page Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeIn 0.5s ease-out forwards;
        }

        /* Page Title */
        .page-title {
            font-size: 24px;
            font-weight: bold;
            color: #1e293b;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Table Styling */
        .trainer-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .trainer-table th, .trainer-table td {
            padding: 15px;
            text-align: left;
        }

        .trainer-table thead {
            background: #1e293b;
            color: white;
        }

        /* Table Row Animation */
        .trainer-table tbody tr {
            transition: all 0.3s ease-in-out;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInRow 0.5s ease-out forwards;
        }

        /* Delay for each row */
        .trainer-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
        .trainer-table tbody tr:nth-child(2) { animation-delay: 0.2s; }

        /* Hover Effect */
        .trainer-table tbody tr:hover {
            background: #e2e8f0;
            transform: scale(1.02);
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

<div class="container">
    <h1 class="page-title">Trainer Management</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="trainer-table">
            <thead>
                <tr>
                    <th class="p-3 text-left">Trainer ID</th>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Specialization</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-3">1</td>
                    <td class="p-3">Ajay Thakor</td>
                    <td class="p-3">Strength Training</td>
                </tr>
                <tr>
                    <td class="p-3">2</td>
                    <td class="p-3">khushi Patel</td>
                    <td class="p-3">Yoga Instructor</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
