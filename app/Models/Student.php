<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'school_id', 'name', 'grade', 'age', 'meal_status',
    ];

    // Mengambil semua data siswa + relasi ke sekolah
    public static function getAllData()
    {
        return self::with('school')->get();
    }


    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function hasReceivedMealToday()
    {
        return $this->meal_status === 'received';
    }
        public function hasNotReceivedMealToday()
    {
        return $this->meal_status === 'not_received';
    }
}

