<?php
 
namespace App\Domains\Product\Services;

use App\Domains\Product\Models\Product;

class SearchProductsService
{
    public function getByID(int $id)
    {
        return Product::where('ProductID', $id)
        ->join('archive', 'ProductIDFK', 'product.ProductID')
        ->join('category', 'CategoryID', 'product.CategoryIDFK')
        ->select(
            'archive.Address as FileAddress',
            'product.ProductID as ProductID',
            'product.Name as Name',
            'product.Price as Price',
            'product.Description as Description',
            'category.Description as Category'
        )->first();
    }

    public function getAll()
    {
        return Product::orderBy('Name')
            ->join('archive', 'ProductIDFK', 'product.ProductID')
            ->select(
                'archive.Address as FileAddress',
                'product.ProductID as ProductID',
                'product.Name as Name',
                'product.Price as Price',
                'product.Description as Description'
            )->get();;
    }

    public function getByCategory(int $categoryID)
    {
        return Product::where('CategoryIDFK', $categoryID)->get();
    }

    public function getMostSell()
    {
        return Product::orderByDesc('NumberOfSales')
            ->join('archive', 'ProductIDFK', 'product.ProductID')
            ->select(
                'archive.Address as FileAddress',
                'product.ProductID as ProductID',
                'product.Name as Name',
                'product.Price as Price',
                'product.Description as Description'
            )->limit(3)->get();
    }
}