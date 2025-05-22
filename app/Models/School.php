<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schools';

    protected $fillable = [
        'school_name', 'address', 'contact_number',
    ];

        // Mengambil semua data sekolah + relasi siswa, distribusi, dan feedback
    public static function getAllData()
    {
        return self::with(['students', 'mealDistributions', 'feedbacks'])->get();
    }


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

    // Jumlah siswa di sekolah
    public function studentCount()
    {
        return $this->students()->count();
    }

    // Jumlah distribusi makan
    public function mealDistributionCount()
    {
        return $this->mealDistributions()->count();
    }

    // Tanggal distribusi terakhir
    public function latestMealDate()
    {
        return $this->mealDistributions()->latest('meal_date')->value('meal_date');
    }

    // Rata-rata rating
    public function averageFeedbackRating()
    {
        return $this->feedbacks()->avg('rating');
    }

    // Jumlah siswa yang belum menerima makan hari ini
    public function studentsNotReceivedToday()
    {
        return $this->students()->where('meal_status', 'not_received')->count();
    }

}
