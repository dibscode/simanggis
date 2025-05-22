<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'school_id', 'name', 'grade', 'age', 'meal_status',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}

