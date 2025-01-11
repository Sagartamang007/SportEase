<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BookingController;  // Ensure this line is included
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');  // Home route
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');  // About Us route
Route::get('/contactus', [PageController::class, 'contactus'])->name('contactus');  // Contact Us route
Route::post('/contactus', [PageController::class, 'submit'])->name('contact.submit');  // Form submission for Contact Us route
Route::get('/futsals', [PageController::class, 'futsals'])->name('available.futsal');  // Store booking
Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');  // Store booking



// Booking Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/booking', [PageController::class, 'booking'])->name('booking');  // Show the booking form
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');  // Store booking


});

// Vendor Routes (Prefix with 'vendor')
Route::middleware('auth')->prefix('vendor')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Vendor\PageController::class, 'dashboard'])->name('vendor.dashboard');
    Route::get('/futsalform', [\App\Http\Controllers\Vendor\PageController::class, 'futsalform'])->name('vendor.futsal');
});

// Authentication Routes
require __DIR__.'/auth.php';
