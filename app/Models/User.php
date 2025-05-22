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

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}

