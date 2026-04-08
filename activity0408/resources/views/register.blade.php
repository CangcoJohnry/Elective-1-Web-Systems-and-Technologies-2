<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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

        .register-card {
            background-color: #2d2d2e;
            padding: 2rem;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            border: 1px solid #3e3e3f;
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #fff;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            background-color: #1a1a1b;
            border: 1px solid #4f4f50;
            border-radius: 4px;
            color: #fff;
            box-sizing: border-box;
        }

        .full-width {
            grid-column: span 2;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        p {
            text-align: center;
            font-size: 14px;
            margin-top: 15px;
        }

        a {
            color: #0056b3;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="register-card">
        <form action="/register" method="POST">
            @csrf
            <h2>Registration</h2>
            
            <div class="grid">
                <input type="text" name="student_id" placeholder="Student ID" required class="full-width">
                
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                
                <input type="email" name="email" placeholder="Email" required class="full-width">
                <input type="password" name="password" placeholder="Password" required class="full-width">
                
                <input type="text" name="course" placeholder="Course" required>
                <input type="text" name="year_level" placeholder="Year Level" required>
                
                <input type="date" name="birthdate" required>
                <select name="gender" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                
                <input type="text" name="phone_number" placeholder="Phone" required>
                <input type="text" name="emergency_contact" placeholder="Emergency Contact" required>
                
                <textarea name="address" placeholder="Address" required class="full-width"></textarea>
            </div>

            <button type="submit">Register</button>
            <p>Already have an account? <a href="/login">Login here</a></p>
        </form>
    </div>

</body>
</html>