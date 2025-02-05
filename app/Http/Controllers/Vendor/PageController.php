<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
            return view('Vendor.dashboard');
    }
    public function futsalform(){
        return view('Vendor.futsalform');
}
    public function myprofile(){
            return view('Vendor.myprofile');
    }
    public function bookings(){
        return view('Vendor.bookings');
}

}
