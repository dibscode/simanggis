<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealDistribution extends Model
{
    protected $table = 'meal_distributions';

    protected $fillable = [
        'school_id', 'meal_date', 'total_students', 'meal_type',
    ];

    // Mengambil semua data distribusi makan + sekolah
    public static function getAllData()
    {
        return self::with('school')->orderBy('meal_date', 'desc')->get();
    }


    public function school()
    {
        return $this->belongsTo(School::class,'school_id');
    }

    // Scope distribusi minggu ini
    public function scopeThisWeek($query)
    {
        return $query->whereBetween('meal_date', [now()->startOfWeek(), now()->endOfWeek()]);
    }

    // Scope distribusi bulan ini
    public function scopeThisMonth($query)
    {
        return $query->whereMonth('meal_date', now()->month);
    }
}

