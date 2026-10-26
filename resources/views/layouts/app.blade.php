<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks for Today</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f8;
            color: #333;
        }

        nav {
            background: #1f4e79;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 18px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            width: 85%;
            max-width: 1000px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
        }

        h1 {
            margin-top: 0;
            color: #1f4e79;
        }

        .subtitle {
            color: #666;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background: #1f4e79;
            color: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        .badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            color: white;
            font-weight: bold;
        }

        .badge-pending { background-color: #ff9800; }
        .badge-completed { background-color: #4CAF50; }
        .badge-on_hold { background-color: #9E9E9E; }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-edit {
            background-color: #2196F3;
            color: white;
        }

        .empty {
            text-align: center;
            padding: 40px;
            color: #666;
        }

        .profile-card {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .profile-field {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .profile-field:last-child {
            border-bottom: none;
        }

        .profile-field label {
            font-weight: bold;
            display: inline-block;
            width: 120px;
            color: #1f4e79;
        }

        .about-content {
            line-height: 1.8;
        }

        .about-content p {
            margin: 8px 0;
        }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('tasks.index') }}">All Tasks</a>
        <a href="{{ route('profile.show') }}">Profile</a>
        <a href="{{ route('about') }}">About</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
