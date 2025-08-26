<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('pages.index');
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

Route::view('login','pages.admin.login');