<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return 'Listagem de produtos';
    }

    public function show($idProduct)
    {
        return "Mostrando produto {$idProduct}";
    }
}
