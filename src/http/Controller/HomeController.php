<?php

namespace Hukh\Helloworld;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('helloworld::welcome');
    }
}