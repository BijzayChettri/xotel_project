<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenity;
use App\Models\Property;
use App\Models\PropertyAmenity;
use App\Models\PropertyImage;
class HomeController extends Controller
{
    public function index() 
    {
        
        // $amenity = Amenity::where('status', '=', 0)->get();
        $properties = Property::with('amenities')->with('images')->where('status', '=', 0)->get();
        // dd($properties)
        return view('user.home',['propertyList'=>$properties]);

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
