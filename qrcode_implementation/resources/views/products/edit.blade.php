<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Product</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Product Name</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>
            <div class="mb-3">
                <label>Price</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>