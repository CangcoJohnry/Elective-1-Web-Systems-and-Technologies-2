<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Image Upload</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
        }
        .container {
            text-align: center;
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 95%;
            max-width: 800px;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 1.8rem;
        }
        h2 {
            color: #7f8c8d;
            font-weight: 400;
            margin-top: 40px;
            margin-bottom: 20px;
            border-bottom: 2px solid #edf2f7;
            padding-bottom: 10px;
        }
        .upload-section {
            background: #f8fafc;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid #edf2f7;
        }
        .upload-section h3 {
            font-size: 1rem;
            color: #34495e;
            margin-top: 0;
        }
        input[type="file"] {
            margin-bottom: 10px;
        }
        .btn-upload {
            background-color: #3498db;
            color: white;
            padding: 8px 20px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }
        .photo-item {
            background: #fff;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #edf2f7;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            width: 170px;
        }
        .photo-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            display: block;
            margin-bottom: 10px;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
            padding: 5px 15px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 0.8rem;
        }
        .success-msg {
            color: #28a745;
            background: #e8f5e9;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Johnry P. Cangco</h1>
        
        @if(session('success'))
            <div class="success-msg">{{ session('success') }}</div>
        @endif

        <div class="upload-section">
            <h3>Single Image Upload</h3>
            <form action="{{ route('photos.store.single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" required>
                <button type="submit" class="btn-upload">Upload Single</button>
            </form>
        </div>

        <div class="upload-section">
            <h3>Multiple Images Upload</h3>
            <form action="{{ route('photos.store.multiple') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="images[]" multiple required>
                <button type="submit" class="btn-upload">Upload Multiple</button>
            </form>
        </div>

        <h2>Uploaded Images</h2>
        <div class="gallery">
            @foreach($photos as $photo)
                <div class="photo-item">
                    <img src="{{ asset('images/' . $photo->image) }}" alt="Image">
                    <form action="{{ route('photos.destroy', $photo->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>