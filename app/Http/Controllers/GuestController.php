<?php

namespace App\Http\Controllers;

use Spatie\RouteAttributes\Attributes\Get;

class GuestController extends Controller
{
    #[Get('/')]
    public function index()
    {
        return response()->text('Hello guest');
    }
}
