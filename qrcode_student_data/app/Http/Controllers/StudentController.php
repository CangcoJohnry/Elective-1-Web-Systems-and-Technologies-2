<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Student::query();

        if ($request->has('search')) {
            $query->where('full_name', 'like', '%' . $request->search . '%')
                  ->orWhere('student_number', 'like', '%' . $request->search . '%');
        }

        $students = $query->get()->map(function ($student) {
            $student->qr = QrCode::size(100)->generate(json_encode([
                'ID' => $student->student_number,
                'Name' => $student->full_name,
                'Course' => $student->course,
                'Email' => $student->email,
                'DOB' => $student->dob,
            ]));
            return $student;
        });

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_number' => 'required|unique:students',
            'full_name' => 'required',
            'course' => 'required',
            'email' => 'required|email',
            'dob' => 'required|date',
            'picture' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('students', 'public');
        }

        Student::create($data);

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'student_number' => 'required|unique:students,student_number,' . $student->id,
            'full_name' => 'required',
            'course' => 'required',
            'email' => 'required|email',
            'dob' => 'required|date',
            'picture' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('students', 'public');
        }

        $student->update($data);
        return redirect()->route('students.index')->with('success', 'Student updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted.');
    }
}