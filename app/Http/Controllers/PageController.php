<?php

namespace App\Http\Controllers;
use App\Models\futsal_court;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $futsal = futsal_court::get();

        return view('admin.pages.home',compact('futsal'));
    }

    public function aboutus()
    {
        return view('admin.pages.aboutus');
    }
    public function booking()
    {
        return view('admin.pages.booking');
    }
}

