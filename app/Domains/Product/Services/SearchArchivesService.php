<?php
 
namespace App\Domains\Product\Services;

use App\Domains\Product\Models\Archive;

class SearchArchivesService
{
    public function getByID(int $id)
    {
        return Archive::find($id);
    }

    public function getAll()
    {
        return Archive::all();
    }

    public function getByProduct(int $productID)
    {
        return Archive::where('ProductIDFK', $productID)->first();
    }
}