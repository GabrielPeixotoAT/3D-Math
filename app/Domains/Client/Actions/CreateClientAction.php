<?php

namespace App\Domains\Client\Actions;

use App\Domains\Client\Models\Client;

class CreateClientAction
{
    public function execute($data) : Client
    {
        return new Client(
            [
                'Name' => $data['name'],
                'Email' => $data['email'],
                'Cpf' => $data['cpf'],
                'Password' => $data['password'],
                'OccupationIDFK' => 1
            ]
        );
    }
}