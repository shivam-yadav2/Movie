<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ShortsController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\LoginController;
use App\Models\Short;
use App\Models\Video;

// Home page
Route::get('/', function () {
    $shorts = Short::all();
     $videos = Video::all();
    return view('pages.index',compact('shorts','videos'));
    // return view('pages.index',compact('videos'));
})->name('home');

// Authentication routes
Route::get('/signin', function () {
    return view('pages.signin');
})->name('signin');

Route::get('/signup', function () {
    return view('pages.signup');
})->name('signup');


Route::get('/forgot-password', function () {
    return view('pages.forgot');
})->name('forgot-password');

// Main pages
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contacts');
})->name('contact');

Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/our-services', function () {
    return view('pages.privacy');
})->name('our-services');

// Catalog and movie pages
Route::get('/catalog', function () {
    return view('pages.catalog');
})->name('catalog');

Route::get('/catalog2', function () {
    return view('pages.catalog2');
})->name('catalog2');

Route::get('/details', function () {
    return view('pages.details');
})->name('details');

Route::get('/details2', function () {
    return view('pages.details2');
})->name('details2');

// Profile and user pages
Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/actor', function () {
    return view('pages.actor');
})->name('actor');

// Error page
Route::get('/404', function () {
    return view('pages.404');
})->name('error.404');

// Catch-all route for 404 errors
Route::fallback(function () {
    return view('pages.404');
});

// Route::view('login','pages.admin.login');
// Route::view('admin','pages.admin.index');

// Admin Login page (for guests only)
Route::get('admin/login', [LoginController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');   

// Handle login form submission
Route::post('admin/login', [LoginController::class, 'login'])
    ->name('loginSubmit'); 

// Logout
Route::post('admin/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');   

// Protected Dashboard
Route::get('admin/dashboard', function () {
    return view('pages.admin.dashboard'); // dashboard Blade
})->middleware('auth')->name('dashboard'); 


// Show all heroes (slider list in admin)
Route::get('/heroes', [HeroController::class, 'index'])->name('heroes.index');
// Show create form
Route::get('/heroes/create', [HeroController::class, 'create'])->name('heroes.create');
// Store new hero
Route::post('/heroes/store', [HeroController::class, 'store'])->name('heroes.store');
// Show edit form
Route::get('/heroes/{hero}/edit', [HeroController::class, 'edit'])->name('heroes.edit');
// Update hero
Route::put('/heroes/{hero}', [HeroController::class, 'update'])->name('heroes.update');
// Delete hero
Route::delete('/heroes/{hero}', [HeroController::class, 'destroy'])->name('heroes.destroy');

// Show all shorts
Route::get('/shorts', [ShortsController::class, 'index'])->name('shorts.index');
// Show create form
Route::get('/shorts/create', [ShortsController::class, 'create'])->name('shorts.create');
// Store new hero
Route::post('/shorts/store', [ShortsController::class, 'store'])->name('shorts.store');
// Show edit form
Route::get('/shorts/{short}/edit', [ShortsController::class, 'edit'])->name('shorts.edit');
// Update hero
Route::put('/shorts/{short}', [ShortsController::class, 'update'])->name('shorts.update');
// Delete hero
Route::delete('/shorts/{short}', [ShortsController::class, 'destroy'])->name('shorts.destroy');

// Show all Videos
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
// Show create form
Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
// Store new hero
Route::post('/videos/store', [VideoController::class, 'store'])->name('videos.store');
// Show edit form
Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('videos.edit');
// Update hero
Route::put('/videos/{video}', [VideoController::class, 'update'])->name('videos.update');
// Delete hero
Route::delete('/videos/{video}', [VideoController::class, 'destroy'])->name('videos.destroy');

