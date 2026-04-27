<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add New Product</h2>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Product Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Price</label>
                <input type="number" step="0.01" name="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Save Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>