<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use App\Http\Controllers\TestimonialController;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');  // Home route
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');  // About Us route with name
Route::get('/contactus', [PageController::class, 'contactus'])->name('contactus');  // Contact Us route with name
Route::post('/contactus', [PageController::class, 'submit'])->name('contact.submit');  // Form submission for Contact Us route






// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/booking',[PageController::class,'booking'])->name('booking');
});

Route::middleware('auth')->prefix('vendor')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Vendor\PageController::class, 'dashboard'])->name('vendor.dashboard');
    Route::get('/futsalform', [\App\Http\Controllers\Vendor\PageController::class, 'futsalform'])->name('vendor.futsal');

});


require __DIR__.'/auth.php';  // Authentication routes

