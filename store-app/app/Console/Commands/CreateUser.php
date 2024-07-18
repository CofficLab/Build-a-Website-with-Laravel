<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    protected $signature = 'user:create {username} {password}';
    protected $description = 'Create a new user in the database';

    public function handle()
    {
        $username = $this->argument('username');
        $password = $this->argument('password');


        // Encrypt the password
        $hashedPassword = Hash::make($password);

        // Create the user
        User::create([
            'email' => $username,
            'password' => $hashedPassword,
        ]);

        $this->info("User '$username' created successfully!");
    }
}
