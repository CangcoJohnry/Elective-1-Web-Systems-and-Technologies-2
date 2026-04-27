<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add New Student</h2>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Student Number</label>
                <input type="text" name="student_number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Full Name</label>
                <input type="text" name="full_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Course</label>
                <input type="text" name="course" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>