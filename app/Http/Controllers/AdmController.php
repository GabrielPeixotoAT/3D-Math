<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domains\Product\Services\SearchProductsService;
use App\Domains\Client\Services\SearchClientService;

class AdmController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private SearchProductsService $searchProductsService;

    public function __construct(
        SearchProductsService $searchProductsService,
        SearchClientService $searchClientService
        ) {
        $this->searchProductsService = $searchProductsService;
        $this->searchClientService = $searchClientService;
    }

    public function index()
    {
        $products = $this->searchProductsService->getAll();
        $clients = $this->searchClientService->getAll();

        return view('admin.management',
            [
                'products' => $products,
                'clients' => $clients
            ]
        );
    }
}
