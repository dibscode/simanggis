<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{
    // GET /schools
    public function index()
    {
        $schools = School::with(['students', 'mealDistributions', 'feedbacks'])->get();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil daftar sekolah.',
            'data' => $schools
        ], 200);
    }

    // GET /schools/{id}
    public function show($id)
    {
        $school = School::with(['students', 'mealDistributions', 'feedbacks'])->find($id);

        if (!$school) {
            return response()->json([
                'success' => false,
                'message' => 'Sekolah tidak ditemukan.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil daftar sekolah.',
            'data' => $school
        ], 200);
    }

    // POST /schools
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'school_name' => 'required|string|max:255',
            'address' => 'required|string',
            'contact_number' => 'nullable|string|max:20'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => $validator->errors()
            ], 422);
        }

        $school = School::create($request->only(['school_name', 'address', 'contact_number']));

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan sekolah.',
            'data' => $school
        ], 201);
    }

    // PUT /schools/{id}
    public function update(Request $request, $id)
    {
        $school = School::find($id);

        if (!$school) {
            return response()->json([
                'success' => false,
                'message' => 'Sekolah tidak ditemukan',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'school_name' => 'required|string|max:255',
            'address' => 'required|string',
            'contact_number' => 'nullable|string|max:20'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => $validator->errors()
            ], 422);
        }

        $school->update($request->only(['school_name', 'address', 'contact_number']));

        return response()->json([
            'success' => true,
            'message' => 'Sekolah berhasil diperbarui.',
            'data' => $school
        ], 200);
    }

    // DELETE /schools/{id}
    public function destroy($id)
    {
        $school = School::find($id);

        if (!$school) {
            return response()->json([
                'success' => false,
                'message' => 'Sekolah tidak ditemukan.',
            ], 404);
        }

        $school->delete();

        return response()->json([
            'success' => true,
            'message' => 'Sekolah berhasil dihapus.'
        ], 200);
    }
}
