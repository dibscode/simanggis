<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        // $students = Student::with('school')->get(); harusnya kelas
        $students = Student::where('school_id', Auth::user()->school_id)
            ->with(['classes'])
            ->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        // $schools = School::all();
        $classes = Classes::where('school_id', Auth::user()->school_id)->get();
        return view('students.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'nullable|exists:classes,class_id',
            'name' => 'required|string|max:255',
            'grade' => 'numeric|min:1|max:12',
            'age' => 'numeric|min:1|max:22'
        ]);
        Student::create([
            'school_id' => Auth::user()->school_id,
            'class_id' => $request->class_id,
            'name' => $request->name,
            'grade' => $request->grade,
            'age' => $request->age,
        ]);
        return redirect()->route('students')->with('success', 'Student created successfully.');
    }

    // public function show($id)
    // {
    //     $student = Student::with('school')->findOrFail($id);
    //     return view('students.show', compact('student'));
    // }

    public function edit($id)
    {
        // $student = Student::findOrFail($id);
        // $schools = School::all();
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
        // $student = Student::findOrFail($id);
        // $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
