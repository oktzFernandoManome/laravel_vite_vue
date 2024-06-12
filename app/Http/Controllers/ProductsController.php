<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View as View;

class ProductsController extends Controller
{
    public function index(): View
    {
        $totalCompra = 0;
        //lista em json de algum fetch qualquer
        $resultFetch = "[{\"nome\":\"Lápis\",\"preco\":0.9},{\"nome\":\"Caneta\",\"preco\":2.1},{\"nome\":\"Caderno\",\"preco\":28.85}]";
        $produtos = json_decode($resultFetch);

        $totalCompra = array_sum(
            array_map(
                function ($produto) {
                    return $produto->preco;
                },
                array_filter($produtos, function ($produto) {
                    return isset($produto->preco) && $produto->preco !== null;
                })
            )
        );

        $dados = [
            'totalCompra' => number_format($totalCompra, 2, ',', '.'),
            'produtos' => $produtos
        ];
        return view('products', $dados);
    }
}
