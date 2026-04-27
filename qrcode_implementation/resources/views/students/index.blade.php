<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student QR System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Student List</h2>

        <div class="d-flex justify-content-between mb-4">
            <form action="{{ route('students.index') }}" method="GET" class="flex-grow-1 me-2">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search Name or Student ID..." value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
            
            <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
        </div>

        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Student Number</th>
                    <th>Full Name</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th class="text-center">QR Code</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->student_number }}</td>
                    <td>{{ $student->full_name }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->email }}</td>
                    <td class="text-center">{!! $student->qr !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if($students->isEmpty())
            <p class="text-center">No students found.</p>
        @endif
    </div>
</body>
</html>