<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('school')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $schools = School::all();
        return view('students.create', compact('schools'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_id' => 'required|exists:schools,school_id',
            'student_name' => 'required|string|max:255',
            'nisn' => 'required|string|max:20',
            'class' => 'required|string|max:50',
            'gender' => 'required|string|max:10',
            'birth_date' => 'required|date',
        ]);
        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show($id)
    {
        $student = Student::with('school')->findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $schools = School::all();
        return view('students.edit', compact('student', 'schools'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'school_id' => 'required|exists:schools,school_id',
            'student_name' => 'required|string|max:255',
            'nisn' => 'required|string|max:20',
            'class' => 'required|string|max:50',
            'gender' => 'required|string|max:10',
            'birth_date' => 'required|date',
        ]);
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
