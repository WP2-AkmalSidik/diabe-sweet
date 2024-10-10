<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk Admin
        DB::table('users')->insert([
            'name' => 'Admin',
            'foto' => null, // optional
            'jenis_kelamin' => 'Pria', // or 'Wanita'
            'tinggi_badan' => null, // optional
            'berat_badan' => null, // optional
            'umur' => null, // optional
            'role' => 1, // 1 untuk Admin
            'email' => 'admin@diabesweet.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'), // ganti dengan password yang aman
            'remember_token' => \Illuminate\Support\Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder untuk User
        DB::table('users')->insert([
            'name' => 'User',
            'foto' => null, // optional
            'jenis_kelamin' => 'Wanita', // or 'Pria'
            'tinggi_badan' => null, // optional
            'berat_badan' => null, // optional
            'umur' => null, // optional
            'role' => 0, // 0 untuk User
            'email' => 'user@diabesweet.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'), // ganti dengan password yang aman
            'remember_token' => \Illuminate\Support\Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
