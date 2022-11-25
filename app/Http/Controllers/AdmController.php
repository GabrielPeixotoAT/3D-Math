<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domains\Product\Services\SearchProductsService;

class AdmController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private SearchProductsService $searchProductsService;

    public function __construct(SearchProductsService $searchProductsService)
    {
        $this->searchProductsService = $searchProductsService;
    }

    public function index()
    {
        $products = $this->searchProductsService->getAll();

        return view('admin.management',
            ['products' => $products]
        );
    }
}
