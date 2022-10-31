<?php
 
namespace App\Http\Controllers;
 
class ClientController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

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

    public function save()
    {

    }
}