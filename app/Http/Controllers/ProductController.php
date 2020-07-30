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

    public function edit($idProduct)
    {
        return "Editando o produto {$idProduct}";
    }

    public function create()
    {
        return "Exibindo o form de cadastro de um novo produto";
    }

    public function store()
    {
        return "Cadastrando um novo produto";
    }

    public function update($id)
    {
        return "Editando o produto {$id}";
    }

    public function destroy($id)
    {
        return "Deletando o produto {$id}";
    }
}
