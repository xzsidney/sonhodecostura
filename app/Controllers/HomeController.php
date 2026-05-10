<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // Limit to 3 for homepage if needed, or show all
        $featuredProducts = array_slice($products, 0, 3);
        
        $this->view('home', [
            'title' => 'Sonho de Costura - Início',
            'products' => $featuredProducts
        ]);
    }

    public function contact()
    {
        $this->view('contact', [
            'title' => 'Fale Conosco - Sonho de Costura'
        ]);
    }
}
