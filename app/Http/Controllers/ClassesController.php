<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassesController extends Controller
{
    public function index()
    {
        // Ambil semua kelas beserta sekolahnya
        $school_id = Auth::user()->school_id;
        $classes = Classes::with('teacher')
            ->where('school_id', $school_id)
            ->get();
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        // Ambil semua guru untuk dropdown (jika diperlukan)
        $school_id = Auth::user()->school_id;
        $teachers = User::where('role', 'guru')
            ->where('school_id', $school_id)
            ->get();
        return view('classes.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $school_id = Auth::user()->school_id;

        $request->validate([
            'teacher_id' => 'required|exists:users,id',
            'class_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Tambahkan school_id ke data yang dikirim
        Classes::create([
            'school_id' => $school_id,
            'teacher_id' => $request->teacher_id,
            'class_name' => $request->class_name,
            'description' => $request->description,
        ]);

        return redirect()->route('class')->with('success', 'Kelas berhasil ditambahkan.');
    }


    public function show($id)
    {
        $class = Classes::with('school', 'students')->findOrFail($id);
        return view('classes.show', compact('class'));
    }

    public function edit($id)
    {
        $class = Classes::findOrFail($id);

        // Ambil school_id dari kelas
        $schoolId = $class->school_id;

        // Ambil teacher yang punya school_id sama dengan kelasnya
        $teachers = User::where('role', 'guru')
            ->where('school_id', $schoolId)
            ->get();

        return view('classes.edit', compact('class', 'teachers'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'class_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'teacher_id' => 'required|exists:users,id',
        ]);

        $class = Classes::findOrFail($id);
        $class->update($validatedData);

        return redirect()
            ->route('classes.index')
            ->with('success', "Kelas '{$class->class_name}' berhasil diupdate.");
    }


    public function destroy($id)
    {
        $class = Classes::findOrFail($id);
        $class->delete();

        return redirect()->route('class')->with('success', 'Kelas berhasil dihapus.');
    }
}
