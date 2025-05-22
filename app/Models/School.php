<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schools';

    protected $fillable = [
        'school_name', 'address', 'contact_number',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function mealDistributions()
    {
        return $this->hasMany(MealDistribution::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
