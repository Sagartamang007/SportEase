<?php

namespace App\Http\Controllers;
use App\Models\ContactUs;
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

    // Show the Contact Us form
    public function contactus()
    {
        return view('admin.pages.contactus');
    }

    // Handle the Contact Us form submission
    public function submitContactForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Create a new contact entry
        ContactUs::create($data);

        // Redirect back with success message
        return back()->with('success', 'Your message has been sent!');
    }
}

