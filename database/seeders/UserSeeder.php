<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Jacky Liu',
            'email' => 'jacky@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('Welkom01'),
            'is_pro' => 0,
            'is_admin' => 0,
            'remember_token' => Str::random(10),
        ]);
    }
}
