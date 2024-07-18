<?php

namespace Database\seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Assuming your User model is located in App\Models\User
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
    
            User::create([
                'email' => Str::random(10).'@example.com',
                'password' => Hash::make('password')
            ]);
    
       

        
    }
}
