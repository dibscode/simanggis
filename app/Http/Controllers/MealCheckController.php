<?php

namespace App\Http\Controllers;

use App\Models\MealDistribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MealCheckController extends Controller
{
     public function index()
    {
        $teacherId = Auth::id();

        $rekap = MealDistribution::select(
                'meal_date',
                DB::raw('COUNT(*) as total'),
                DB::raw("SUM(CASE WHEN status = 'received' THEN 1 ELSE 0 END) as received"),
                DB::raw("SUM(CASE WHEN status = 'not_received' THEN 1 ELSE 0 END) as not_received")
            )
            ->where('teacher_id', $teacherId)
            ->groupBy('meal_date')
            ->orderBy('meal_date', 'desc')
            ->get();

        return view('teacher.meal_check.index', compact('rekap'));
    }
}
