<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Edit Student Information</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Student Number</label>
                                <input type="text" name="student_number" class="form-control" value="{{ $student->student_number }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="full_name" class="form-control" value="{{ $student->full_name }}" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Course</label>
                                    <input type="text" name="course" class="form-control" value="{{ $student->course }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" name="dob" class="form-control" value="{{ $student->dob }}" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Profile Picture</label>
                                @if($student->picture)
                                    <div class="mb-2">
                                        <small class="text-muted d-block">Current Picture:</small>
                                        <img src="{{ asset('storage/' . $student->picture) }}" width="80" height="80" class="rounded border">
                                    </div>
                                @endif
                                <input type="file" name="picture" class="form-control" accept="image/*">
                                <small class="text-muted">Leave blank to keep the current picture.</small>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary px-4">Update Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>