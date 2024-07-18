<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class ProductCreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:create {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new product';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('name');

        // Generate HTML card representation
        $html = '<div class="col-md-4">
                    <div class="card">
                        <img src="https://www.example.com/image.jpg" class="card-img-top" alt="' . $name . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $name . '</h5>
                            <p class="card-text">Product description or details here.</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="#" class="btn btn-primary" onclick="navigateTo(\'product-' . '\')">Go Detail</a>
                        </div>
                    </div>
                </div>';

        // Output the HTML to console
        $this->info("Product '$name' created successfully!");
        $this->line($html);
    }
}
