<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Ensure this import is correct
use Illuminate\Support\Str;

class APIseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'API' => random_int(100, 999) . 'API', // Generate a random API number like 123API
            'description' => Str::random(30), // Generate a random string of 30 characters
        ]);
    }
}
