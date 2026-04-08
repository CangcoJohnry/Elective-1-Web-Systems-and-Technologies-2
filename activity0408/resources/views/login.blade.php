<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style>
        body {
    background-color: #1a1a1b;
    font-family: 'Segoe UI', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-card {
    background-color: #2d2d2e;
    padding: 2rem;
    border-radius: 8px;
    width: 100%;
    max-width: 350px;
    border: 1px solid #3e3e3f;
}

h2 {
    color: #ffffff;
    text-align: center;
    margin-bottom: 1.5rem;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 1rem;
    background-color: #1a1a1b;
    border: 1px solid #4f4f50;
    border-radius: 4px;
    color: #ffffff;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #0056b3;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
}

.links {
    text-align: center;
    margin-top: 1rem;
}

.links a {
    color: #888;
    text-decoration: none;
    font-size: 13px;
}
    </style>
</head>
<body>
    
    <form action="/login" method="POST">
        @csrf
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
        <p><a href="/register">Register here</a></p>
    </form>

</body>
</html>