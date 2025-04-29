<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function getUserName()
    {
        return "Fahad Ali";
    }
    function dynamicName($name)
    {
        return view('user', ['name' => $name]);
    }
    function about()
    {
        return view('about');
    }
}
