<?php

namespace App\Http\Controllers;

use App\Models\MealDistribution;
use App\Models\School;
use Illuminate\Http\Request;

class MealDistributionController extends Controller
{
    public function index()
    {
        $distributions = MealDistribution::with('school')->get();
        return view('distributions.index', compact('distributions'));
    }

    public function create()
    {
        $schools = School::all();
        return view('distributions.create', compact('schools'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_id' => 'required|exists:schools,school_id',
            'meal_date' => 'required|date',
            'total_students' => 'required|integer',
            'meal_type' => 'required|string|max:50',
        ]);
        MealDistribution::create($request->all());
        return redirect()->route('distributions.index')->with('success', 'Distribution created successfully.');
    }

    public function show($id)
    {
        $distribution = MealDistribution::with('school')->findOrFail($id);
        return view('distributions.show', compact('distribution'));
    }

    public function edit($id)
    {
        $distribution = MealDistribution::findOrFail($id);
        $schools = School::all();
        return view('distributions.edit', compact('distribution', 'schools'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'school_id' => 'required|exists:schools,school_id',
            'meal_date' => 'required|date',
            'total_students' => 'required|integer',
            'meal_type' => 'required|string|max:50',
        ]);
        $distribution = MealDistribution::findOrFail($id);
        $distribution->update($request->all());
        return redirect()->route('distributions.index')->with('success', 'Distribution updated successfully.');
    }

    public function destroy($id)
    {
        $distribution = MealDistribution::findOrFail($id);
        $distribution->delete();
        return redirect()->route('distributions.index')->with('success', 'Distribution deleted successfully.');
    }
}
