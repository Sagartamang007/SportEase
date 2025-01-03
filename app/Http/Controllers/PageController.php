<?php

namespace App\Http\Controllers;
use App\Models\futsal_court;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $futsal = futsal_court::get();

        return view('Frontend.pages.home',compact('futsal'));
    }

    public function aboutus()
    {
        return view('Frontend.pages.aboutus');
    }
    public function booking()
    {
        return view('Frontend.pages.booking');
    }
}

