<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
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
            max-width: 700px;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 5px;
            font-size: 1.8rem;
        }
        h2 {
            color: #7f8c8d;
            font-weight: 400;
            margin-bottom: 25px;
        }
        .btn-add {
            display: inline-block;
            margin-bottom: 30px;
            text-decoration: none;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #fff;
            margin-bottom: 15px;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #edf2f7;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .book-info {
            display: block;
            margin-bottom: 15px;
            font-size: 1.1rem;
            color: #34495e;
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .btn-edit {
            text-decoration: none;
            background-color: #28a745;
            color: white;
            padding: 8px 20px;
            border-radius: 4px;
            font-size: 0.9rem;
            border: none;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
            padding: 8px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
            border: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Johnry P. Cangco</h1>
        <h2>All Books</h2>
        
        <a href="{{ route('books.create') }}" class="btn-add">+ Add New Book</a>
        
        <ul>
            @foreach ($books as $book)
            <li>
                <span class="book-info">
                    <strong>{{ $book->title }}</strong> by {{ $book->author }}
                    <br>
                    <small style="color: #95a5a6;">Published: {{ $book->published_date }}</small>
                </span>
                
                <div class="actions">
                    <a href="{{ route('books.edit', $book->id) }}" class="btn-edit">Edit</a>
                    
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

</body>
</html>