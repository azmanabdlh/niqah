<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Spatie\RouteAttributes\Attributes\Get;

class GuestController extends Controller
{
    #[Get('/')]
    public function index()
    {
        return Response::view('welcome');
    }
}
