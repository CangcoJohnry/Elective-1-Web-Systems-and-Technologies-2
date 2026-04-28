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

        <table class="table table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>Picture</th>
                    <th>Student Number</th>
                    <th>Full Name</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Birth Date</th>
                    <th>QR Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="text-center">
                        @if($student->picture)
                            <img src="{{ asset('storage/' . $student->picture) }}" 
                                 width="60" 
                                 height="60" 
                                 style="object-fit: cover;" 
                                 class="border shadow-sm">
                        @else
                            <div class="bg-secondary text-white d-inline-block border" 
                                 style="width:80px; height:80px; line-height:80px; font-size: 12px;">
                                 NO IMAGE
                            </div>
                        @endif
                    </td>
                    <td>{{ $student->student_number }}</td>
                    <td>{{ $student->full_name }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->dob }}</td>
                    <td class="text-center">{!! $student->qr !!}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?')">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if($students->isEmpty())
            <p class="text-center mt-4">No students found.</p>
        @endif
    </div>
</body>
</html>