<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index()
    {
        return view('layouts.home');
    }
    function rooms()
    {
        return view('layouts.rooms');
    }
    function contact()
    {
        return view('layouts.contact');
    }
    function booking()
    {
        return view('layouts.bookingStage1');
    }
    function booking1()
    {
        return view('layouts.bookingStage1');
    }
    function booking2()
    {
        return view('layouts.bookingStage2');
    }
    function booking3()
    {
        return view('layouts.bookingStage3');
    }
    function policies()
    {
        return view('layouts.allPolicies');
    }
    function aboutus()
    {
        return view('layouts.aboutus');
    }
}
