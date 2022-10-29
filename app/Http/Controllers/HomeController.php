<?php
 
namespace App\Http\Controllers;

 
class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function show()
    {
        return view('home');
    }
}