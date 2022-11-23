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

        return view('product.catalog',
            ['products' => $products]
        );
    }

    public function showProduct($id)
    {
        $product = $this->searchProductsService->getByID($id);

        return view('product.product-details',
            ['product' => $product]
        );
    }
}
