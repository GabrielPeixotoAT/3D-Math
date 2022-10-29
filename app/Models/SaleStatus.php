<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleStatus extends Model
{
    use HasFactory;

    public $table = "SaleStatus";
    protected $primaryKey = "SaleStatusID";
    protected $guarded = ['SaleStatusID'];
}
