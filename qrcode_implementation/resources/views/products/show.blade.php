<!DOCTYPE html>
<html>
<head>
    <title>View Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <div class="my-4">
            {!! $qr !!}
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</body>
</html>