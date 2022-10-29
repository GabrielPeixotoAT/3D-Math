<?php

namespace App\Domains\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = "Product";
    protected $primaryKey = "ProductID";
    protected $guarded = ['ProductID'];
}
