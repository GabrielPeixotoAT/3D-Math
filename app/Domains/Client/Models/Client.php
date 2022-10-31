<?php

namespace App\Domains\Client\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $table = "client";
    protected $primaryKey = "ClientID";
    protected $guarded = ['ClientID'];
}
