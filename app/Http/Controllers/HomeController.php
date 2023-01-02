<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('user.home');
    }
    public function addSpace()
    {
        return view('user.addSpace');
    }
    public function becomeHost()
    {
        return view('user.becomeHost');
    }
    public function about()
    {
        return view('user.about');
    }
    public function contactUs()
    {
        return view('user.contactUs');
    }
    public function help()
    {
        return view('user.help');
    }
    public function terms()
    {
        return view('user.terms');
    }
}
