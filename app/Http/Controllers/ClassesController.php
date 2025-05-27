<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\School;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua kelas beserta sekolahnya
        $classes = Classes::with('school')->get();
        return view('classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua sekolah untuk dropdown (jika diperlukan)
        $schools = School::all();
        return view('classes.create', compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'school_id' => 'required|exists:schools,school_id',
            'class_name' => 'required|string|max:255',
        ]);

        Classes::create($request->all());

        return redirect()->route('classes.index')->with('success', 'Kelas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $class = Classes::with('school', 'students')->findOrFail($id);
        return view('classes.show', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $class = Classes::findOrFail($id);
        $schools = School::all();
        return view('classes.edit', compact('class', 'schools'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'school_id' => 'required|exists:schools,school_id',
            'class_name' => 'required|string|max:255',
        ]);

        $class = Classes::findOrFail($id);
        $class->update($request->all());

        return redirect()->route('classes.index')->with('success', 'Kelas berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $class = Classes::findOrFail($id);
        $class->delete();

        return redirect()->route('classes.index')->with('success', 'Kelas berhasil dihapus.');
    }
}
