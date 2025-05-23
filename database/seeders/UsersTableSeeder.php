<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username'       => 'admin',
                'password'       => Hash::make('admin123'),
                'role'           => 'admin',
                'remember_token' => null,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'username'       => 'operator1',
                'password'       => Hash::make('operator123'),
                'role'           => 'operator',
                'remember_token' => null,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}
