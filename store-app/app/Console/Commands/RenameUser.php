<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class RenameUser extends Command
{
    protected $signature = 'user:rename {old} {new}';
    protected $description = 'Rename a user in the database';

    public function handle()
    {
        $oldUsername = $this->argument('old');
        $newUsername = $this->argument('new');

        // Find the user by old username
        $user = User::where('email', $oldUsername)->first();

        if (!$user) {
            $this->error("User '$oldUsername' not found.");
            return;
        }

        // Update the username
        $user->email = $newUsername;
        $user->save();

        $this->info("Username '$oldUsername' updated to '$newUsername' successfully.");
    }
}
