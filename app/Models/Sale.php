<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public $table = "Sale";
    protected $primaryKey = "SaleID";
    protected $guarded = ['SaleID'];
}
