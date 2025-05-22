<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealDistribution extends Model
{
    protected $table = 'meal_distributions';

    protected $fillable = [
        'school_id', 'meal_date', 'total_students', 'meal_type',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}

