<?php

namespace App\Domains\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $table = "categoty";
    protected $primaryKey = "CategotyID";
    protected $guarded = ['CategotyID'];
}
