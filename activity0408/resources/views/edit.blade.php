<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
        }
        .edit-card {
            background-color: #2d2d2e;
            padding: 2rem;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            border: 1px solid #3e3e3f;
        }
        h2 { text-align: center; margin-bottom: 20px; }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #1a1a1b;
            border: 1px solid #4f4f50;
            border-radius: 4px;
            color: #fff;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }
        .cancel {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #888;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="edit-card">
        <h2>Edit Profile</h2>
        <form action="/profile/update" method="POST">
            @csrf
            <input type="text" name="first_name" value="{{ Auth::user()->first_name }}" placeholder="First Name" required>
            <input type="text" name="last_name" value="{{ Auth::user()->last_name }}" placeholder="Last Name" required>
            <input type="text" name="course" value="{{ Auth::user()->course }}" placeholder="Course" required>
            <input type="text" name="year_level" value="{{ Auth::user()->year_level }}" placeholder="Year Level" required>
            <input type="text" name="phone_number" value="{{ Auth::user()->phone_number }}" placeholder="Phone" required>
            <input type="text" name="emergency_contact" value="{{ Auth::user()->emergency_contact }}" placeholder="Emergency Contact" required>
            <textarea name="address" placeholder="Address" required>{{ Auth::user()->address }}</textarea>
            
            <button type="submit">Update Profile</button>
            <a href="/profile" class="cancel">Cancel</a>
        </form>
    </div>
</body>
</html>