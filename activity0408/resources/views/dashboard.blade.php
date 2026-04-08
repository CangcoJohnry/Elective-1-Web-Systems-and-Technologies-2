<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-color: #1a1a1b;
            color: #eee;
            font-family: sans-serif;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .nav {
            display: flex;
            gap: 15px;
            align-items: center; 
        }

        .nav a, .nav button {
            color: #0056b3;
            text-decoration: none;
            background: none;
            border: none;
            font-size: 14px;
            cursor: pointer;
            padding: 0;
            line-height: 1; 
            display: flex;
            align-items: center;
        }

        table {
            width: 95%;
            border-collapse: collapse;
            font-size: 14px;
            margin: 0 auto; 
        }

        th, td {
            padding: 8px;
            border: 1px solid #333;
            text-align: left;
        }

        th {
            background: #0056b3;
            color: white;
        }

        h3 {
            width: 95%;
            margin: 20px auto 10px auto; 
        }
    </style>
</head>
<body>
    
    <div class="header">
        <h2 style="margin:0;">Welcome, {{ Auth::user()->first_name }}!</h2>
        <div class="nav">
            <a href="/profile">My Profile</a>
            <form action="/logout" method="POST" style="display:flex; align-items:center; margin:0;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
    <br><br><br>
    <h3>Activity Logs</h3>
    <table>
        <thead>
            <tr>
                <th>Action</th>
                <th>Description</th>
                <th>IP Address</th>
                <th>Date/Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach(\App\Models\ActivityLog::where('user_id', Auth::id())->latest()->get() as $log)
            <tr>
                <td>{{ $log->action }}</td>
                <td>{{ $log->description }}</td>
                <td>{{ $log->ip_address }}</td>
                <td>{{ $log->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>