<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class createAPI extends Command
{
    protected $signature = 'API:create {API} {description}';
    protected $description = 'Create a new API in the database';

    public function handle()
    {
        $API = $this->argument('API');
        $Description = $this->argument('description');


        

        // Create the user
        Product::create([
            'API' => $API."API",
            'description' => $Description,
        ]);

        $this->info(" '$API' created successfully!");
    }
}
