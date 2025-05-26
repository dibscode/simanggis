<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'student_id';

    protected $fillable = [
        'school_id',
        'student_name',
        'nisn',
        'class',
        'gender',
        'birth_date',
    ];

    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'school_id');
    }

    public function MealDistributions()
    {
        return $this->hasMany(MealDistribution::class, 'student_id', 'student_id');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'student_id', 'student_id');
    }
}
