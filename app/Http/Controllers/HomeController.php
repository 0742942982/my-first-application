<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // You can fetch some data here if needed
        return view('home');
    }
    public function Header()
    {
        // You can fetch some data here if needed
        return view('header');
    }
    public function Footer()
    {
        // You can fetch some data here if needed
        return view('footer');
    }
}
