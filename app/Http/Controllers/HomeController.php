<?php
 
namespace App\Http\Controllers;

use App\Domains\Product\Services\SearchProductsService;
 
class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    private SearchProductsService $searchProductsService;

    public function __construct(SearchProductsService $searchProductsService)
    {
        $this->searchProductsService = $searchProductsService;
    }

    public function show()
    {
        $mostSellProducts = $this->searchProductsService->getMostSell();

        return view('home',
            ['mostSell' => $mostSellProducts]
        );
    }
}