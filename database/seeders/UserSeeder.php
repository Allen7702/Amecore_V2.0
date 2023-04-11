<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name' => 'Amecore',
        'email' => 'info@amecore.co.tz',
        'email_verified_at' => now(),
        'password' => Hash::make('amecore@12345'), // password
        'remember_token' => Str::random(10),
    ]);
    }
}
