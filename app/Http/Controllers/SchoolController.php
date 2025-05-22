<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        return School::with(['students', 'mealDistributions', 'feedbacks'])->get();
    }

    public function show($id)
    {
        return School::with(['students', 'mealDistributions', 'feedbacks'])->findOrFail($id);
    }

    public function store(Request $request)
    {
        return School::create($request->only(['school_name', 'address', 'contact_number']));
    }

    public function update(Request $request, $id)
    {
        $school = School::findOrFail($id);
        $school->update($request->only(['school_name', 'address', 'contact_number']));
        return $school;
    }

    public function destroy($id)
    {
        return School::destroy($id);
    }
}

