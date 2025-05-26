<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MealDistribution extends Model
{
    use HasFactory;

    protected $primaryKey = 'distribution_id';
    protected $table = 'meal_distributions';

    protected $fillable = [
        'school_id',
        'meal_date',
        'total_students',
        'meal_type',
    ];

    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'school_id');
    }
}
