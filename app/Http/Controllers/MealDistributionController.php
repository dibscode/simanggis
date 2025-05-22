<?php

namespace App\Http\Controllers;

use App\Models\MealDistribution;
use Illuminate\Http\Request;

class MealDistributionController extends Controller
{
    public function index()
    {
        return MealDistribution::with('school')->get();
    }

    public function show($id)
    {
        return MealDistribution::with('school')->findOrFail($id);
    }

    public function store(Request $request)
    {
        return MealDistribution::create($request->only(['school_id', 'meal_date', 'total_students', 'meal_type']));
    }

    public function update(Request $request, $id)
    {
        $distribution = MealDistribution::findOrFail($id);
        $distribution->update($request->only(['school_id', 'meal_date', 'total_students', 'meal_type']));
        return $distribution;
    }

    public function destroy($id)
    {
        return MealDistribution::destroy($id);
    }
}
