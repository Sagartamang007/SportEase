<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\futsal_court;

use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        if(Auth()->user()->type === 0){
            return view('Vendor.dashboard'); //vendor of futsals
        }
        else if (Auth()->user()->type === 1){
            $futsal = futsal_court::get();

            return view('Frontend.pages.home', ['futsal' =>$futsal]);//normal user
        }
        else {
            return view('superadmin'); //me the owner
        }

        return redirect()->route('home');
    }

    /**
     * Destroy an authenticated session.
     */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/');
    // }
    public function destroy(Request $request): RedirectResponse
{
    // Logout the user from their guard
    Auth::guard()->logout();

    // Invalidate the session
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Check if the user is a vendor and redirect accordingly
    // if ($request->user() && $request->user()->hasRole('vendor')) {
    //     return redirect()->route('vendor.login'); // Redirect to vendor login
    // }
    if (Auth::user() && Auth::user()->hasRole('vendor')) {
        return redirect()->route('vendor.login');
    }


    // Default redirection for general users
    return redirect('/');
}

}
