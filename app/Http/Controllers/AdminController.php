<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use App\Models\Student;
use App\Models\MealDistribution;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalSekolah = School::count();
        $totalGuru = User::where('role', 'guru')->count();
        $totalSiswa = Student::count();
        $totalDistribusi = MealDistribution::count();

        // Statistik siswa sudah dapat makan gratis (hari ini)
        $siswaSudahMakan = MealDistribution::whereDate('meal_date', now()->toDateString())->where('status', 'received')->count();

        return view('admin.dashboard', compact(
            'totalSekolah',
            'totalGuru',
            'totalSiswa',
            'totalDistribusi',
            'siswaSudahMakan'
        ));
    }
}