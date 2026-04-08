<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            background-color: #1a1a1b;
            color: #eee;
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .profile-card {
            background-color: #2d2d2e;
            padding: 2rem;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            border: 1px solid #3e3e3f;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #333;
            padding-bottom: 10px;
        }

        .header h2 { margin: 0; font-size: 20px; }

        .header a {
            color: #0056b3;
            text-decoration: none;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #333;
            text-align: left;
        }

        th {
            color: #0056b3;
            width: 40%;
        }

        td { color: #ccc; }

        .footer {
            margin-top: 20px;
            text-align: center;
        }

        .footer a {
            color: #ff4848;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="header">
            <h2>User Profile</h2>
            <a href="/profile/edit">Edit Profile</a>
        </div>

        <table>
            <tr><th>Student ID</th><td>{{ Auth::user()->student_id }}</td></tr>
            <tr><th>Name</th><td>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</td></tr>
            <tr><th>Email</th><td>{{ Auth::user()->email }}</td></tr>
            <tr><th>Course</th><td>{{ Auth::user()->course }}</td></tr>
            <tr><th>Year Level</th><td>{{ Auth::user()->year_level }}</td></tr>
            <tr><th>Birthdate</th><td>{{ Auth::user()->birthdate }}</td></tr>
            <tr><th>Gender</th><td>{{ Auth::user()->gender }}</td></tr>
            <tr><th>Phone</th><td>{{ Auth::user()->phone_number }}</td></tr>
            <tr><th>Emergency Contact</th><td>{{ Auth::user()->emergency_contact }}</td></tr>
            <tr><th>Address</th><td>{{ Auth::user()->address }}</td></tr>
        </table>

        <div class="footer">
            <a href="/dashboard">Back to Dashboard</a>
        </div>
    </div>

</body>
</html>