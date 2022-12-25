<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function addSpace()
    {
        return view('addSpace');
    }
    public function becomeHost()
    {
        return view('becomeHost');
    }
    public function about()
    {
        return view('about');
    }
    public function contactUs()
    {
        return view('contactUs');
    }
    public function help()
    {
        return view('help');
    }
    public function terms()
    {
        return view('terms');
    }

    public function handleAdmin()
    {
        return view('auth/login');
    }  

    public function welcomeAdmin()
    {
        return view('admin/welcomeAdmin');

    } 
}

