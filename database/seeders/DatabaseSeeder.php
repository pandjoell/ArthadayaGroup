<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'pandjoel',
            'email' => 'pandamerahada2@gmail.com',
            'password' => Hash::make('admin#123'),
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'buyer',
            'email' => 'buyer@gmail.com',
            'password' => Hash::make('buyer#123'),
            'role' => 'buyer',
        ]);
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin#123'),
            'role' => 'admin',
        ]);
    }
}
