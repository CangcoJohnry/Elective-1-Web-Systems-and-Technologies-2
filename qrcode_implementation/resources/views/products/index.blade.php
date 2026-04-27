<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Product Inventory</h2>
        <div class="mb-3">
            <a href="{{ route('products.create') }}" class="btn btn-success">Add New Product</a>
        </div>
        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th class="text-center">QR Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->description }}</td>
                    <td class="text-center">{!! $product->qr !!}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>