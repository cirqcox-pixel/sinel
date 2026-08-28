<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@sinelhospitality.com'],
            [
                'name' => 'Sinel Admin',
                'password' => Hash::make('Sinel@Demo2026'),
                'role' => User::ROLE_ADMIN,
                'phone' => '+256 772 902 188',
            ]
        );

        User::updateOrCreate(
            ['email' => 'student@sinelhospitality.com'],
            [
                'name' => 'Demo Student',
                'password' => Hash::make('Sinel@Demo2026'),
                'role' => User::ROLE_STUDENT,
                'phone' => null,
            ]
        );
    }
}