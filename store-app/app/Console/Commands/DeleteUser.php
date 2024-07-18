<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class DeleteUser extends Command
{
    protected $signature = 'user:delete {email}';
    protected $description = 'Delete a user by username';

    public function handle()
    {
        $username = $this->argument('email');

        // Find the user by username
        $user = User::where('email', $username)->first();

        if (!$user) {
            $this->error("User '$username' not found.");
            return;
        }

        // Delete the user
        $user->delete();

        $this->info("User '$username' deleted successfully.");
    }
}
