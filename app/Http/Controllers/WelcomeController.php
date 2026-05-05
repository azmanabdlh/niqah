<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Get;

class WelcomeController extends Controller
{
    #[Get("/")]
    function index() 
    {
        return view("welcome");
    }
}
