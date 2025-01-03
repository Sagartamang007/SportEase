<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
            return view('dashboard');
    }
    public function futsalform(){
        return view('Vendor.futsalform');
}
}
