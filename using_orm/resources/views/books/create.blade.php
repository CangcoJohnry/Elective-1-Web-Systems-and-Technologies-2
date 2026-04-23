<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
        }
        .container {
            text-align: center;
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 90%;
            max-width: 400px;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 25px;
            font-size: 1.8rem;
        }
        form {
            display: flex;
            flex-direction: column;
            text-align: left;
        }
        label {
            color: #7f8c8d;
            margin-bottom: 5px;
            font-size: 0.9rem;
            font-weight: bold;
        }
        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #edf2f7;
            border-radius: 5px;
            font-size: 1rem;
            outline: none;
        }
        .btn-save {
            background-color: #3498db;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
        }
        .btn-back {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #7f8c8d;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Add New Book</h1>
        
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>
        
            <label for="published_date">Published Date:</label>
            <input type="date" id="published_date" name="published_date" required>
        
            <button type="submit" class="btn-save">Save Book</button>
        </form>

        <a href="{{ route('books.index') }}" class="btn-back">Back to List</a>
    </div>

</body>
</html>