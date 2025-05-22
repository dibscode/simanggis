<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return Student::with('school')->get();
    }

    public function show($id)
    {
        return Student::with('school')->findOrFail($id);
    }

    public function store(Request $request)
    {
        return Student::create($request->only(['school_id', 'name', 'grade', 'age', 'meal_status']));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->only(['school_id', 'name', 'grade', 'age', 'meal_status']));
        return $student;
    }

    public function destroy($id)
    {
        return Student::destroy($id);
    }
}

