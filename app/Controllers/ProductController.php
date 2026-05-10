<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $this->view('products', [
            'title' => 'Nossos Produtos',
            'products' => $products
        ]);
    }
}
