<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username', 'password', 'role', 'remember_token',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

        // Mengambil semua data user + feedback yang pernah mereka buat
    public static function getAllData()
    {
        return self::with('feedbacks')->get();
    }

    // auth pake user:
    public function getAuthIdentifierName()
    {
        return 'username';
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'user_id');
    }

    // Cek role
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isOperator()
    {
        return $this->role === 'operator';
    }

    // Total feedback yang sudah dikirimkan
    public function feedbackCount()
    {
        return $this->feedbacks()->count();
    }
}

