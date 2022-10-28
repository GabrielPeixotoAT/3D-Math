<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    use HasFactory;

    public $table = "occupation";
    protected $primaryKey = "OccupationID";
    protected $guarded = ['OccupationID'];
}
