<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domains\Client\Services\SaveClientService;
 
class ClientController extends Controller
{
    private SaveClientService $saveClientService;

    public function __construct(SaveClientService $saveClientService)
    {
        $this->saveClientService = $saveClientService;
    }

    public function index(int $log)
    {
        if ($log == 0)
        {
            return view('register');
        }
        else
        {
            return view('login');
        }
        
    }

    public function save(Request $request)
    {
        $message = $this->saveClientService->execute($request);
        //dd($message);

        if ($message == 'success')
        {
            return redirect()->route('home')->with('message', $message);
        }
        else
        {
            //return redirect()->back()->with('message', $message);
            return redirect()->back();
        }
    }
}