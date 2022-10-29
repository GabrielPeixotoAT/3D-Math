<?php
 
namespace App\Domains\Product\Services;

use App\Domains\Product\Models\Product;

class SearchProductsService
{
    public function getByID(int $id)
    {
        return Product::find($id);
    }

    public function getAll()
    {
        return Product::all();
    }

    public function getByCategory(int $categoryID)
    {
        return Product::where('CategoryIDFK', $categoryID)->get();
    }
}