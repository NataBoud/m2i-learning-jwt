<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    private static string $password;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'natalia',
            'email' => 'natalia@gmail.com',
        ]);

//        DB::table('users')->insert([
//            'name' => Str::random(10),
//            'email' => Str::random(10).'@example.com',
//            'email_verified_at' => now(),
//            'password' => static::$password ??= Hash::make('password'),
//            'remember_token' => Str::random(10)
//        ]);
    }
}
