<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        // Generate 10 data acak
        //--User::factory()->count(10)->create(); 

        User::create([
            'name' => 'R21',
            'email' => 'Rak@21.com',
            'password' => Hash::make('R213'), 
        ]);
    
    }
}
