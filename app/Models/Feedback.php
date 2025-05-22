<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
        'school_id', 'user_id', 'feedback_text', 'rating',
    ];

    // Mengambil semua data feedback + relasi ke user dan sekolah
    public static function getAllData()
    {
        return self::with(['user', 'school'])->latest()->get();
    }


    public function school()
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Scope rating tinggi (misalnya rating 4 ke atas)
    public function scopeHighRated($query)
    {
        return $query->where('rating', '>=', 4);
    }

    // Scope rating rendah (misalnya rating di bawah 3)
    public function scopeLowRated($query)
    {
        return $query->where('rating', '<=', 2);
    }

    // Tampilkan preview teks
    public function previewText($length = 50)
    {
        return Str::limit($this->feedback_text, $length);
    }

}
