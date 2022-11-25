<?php

namespace App\Domains\Client\Services;

use App\Domains\Client\Models\Client;

class SearchClientService
{
    public function getAll()
    {
        return Client::all();
    }
}
