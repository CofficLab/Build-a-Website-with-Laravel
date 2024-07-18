<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class deleteAPI extends Command
{
    protected $signature = 'API:delete {API}';
    protected $description = 'Delete a API by its name';

    public function handle()
    {
        $API = $this->argument('API');

        // Find the user by username
        $APIname = Product::where('API', $API)->first();

        if (!$APIname) {
            $this->error(" '$API' not found.");
            return;
        }

        // Delete the user
        $APIname->delete();

        $this->info(" '$API' deleted successfully.");
    }
}
