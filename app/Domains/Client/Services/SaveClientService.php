<?php

namespace App\Domains\Client\Services;

use Illuminate\Http\Request;
use App\Domains\Client\Actions\CreateClientAction;
use Illuminate\Support\Facades\Validator;

class SaveClientService
{
    private CreateClientAction $createClientAction;

    public function __construct(
        CreateClientAction $createClientAction
    ) {
        $this->createClientAction = $createClientAction;
    }

    public function execute(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|e-mail',
            'cpf' => 'required|numeric|unique:Client,cpf',
            'password' => 'required',
            'passwordagain' => 'required|same:password'
        ]);

        //dd($request);
        //dd($validator->messages());

        if ($validator->fails()) {
            return 'validation';
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|e-mail',
            'cpf' => 'required|numeric|unique:Client,cpf',
            'password' => 'required',
            'passwordagain' => 'required|same:password'
        ]);

        $client = $this->createClientAction->execute($validatedData);
        $client->save();
            
        return 'success';
    }
}
