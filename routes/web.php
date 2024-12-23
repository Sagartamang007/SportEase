<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');  // Home route
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');  // About Us route with name
Route::get('/contactus', [PageController::class, 'contactus'])->name('contactus');
Route::post('/contactus/submit', [PageController::class, 'submitContactForm'])->name('contactus.submit');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';  // Authentication routes

