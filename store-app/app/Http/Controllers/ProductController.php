<?php
// ExampleController.php

namespace App\Http\Controllers;

use App\Models\Product; // Adjust based on your model namespace
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $apis = Product::all(); // Fetch all APIs from the database

        return view('welcome', compact('apis'));
    }
}
