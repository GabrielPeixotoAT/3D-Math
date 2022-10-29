<?php

namespace App\Domains\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    public $table = "Archive";
    protected $primaryKey = "ArchiveID";
    protected $guarded = ['ArchiveID'];
}
