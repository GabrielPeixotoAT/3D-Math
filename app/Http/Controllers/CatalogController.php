<?php

namespace App\Http\Controllers;

use App\Domains\Product\Services\SearchProductsService;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    private SearchProductsService $searchProductsService;

    public function __construct(SearchProductsService $searchProductsService)
    {
        $this->searchProductsService = $searchProductsService;
    }

    public function show()
    {
        $products = $this->searchProductsService->getAll();

        return view('catalog',
            ['products' => $products]
        );
    }
}
