<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(){
        return view('pages.profile');
    }
    public function index()
    {
        return view('home');
    }
}
