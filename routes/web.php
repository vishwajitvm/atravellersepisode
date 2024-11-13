<?php

use App\Http\Controllers\website\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
})->name('homepage');

//WEBSITE ROUTES
Route::get('/about'  , [HomeController::class , 'aboutview'])->name('about') ;
Route::get('/contact'  , [HomeController::class , 'contact'])->name('contact') ;
Route::get('/tour-package'  , [HomeController::class , 'toutPackage'])->name('tour-package') ;

Route::controller(HomeController::class)->group(function() {
    Route::prefix('tour')->group(function() {
        Route::get('/kedarnath'  , [HomeController::class , 'kedarnathTour'])->name('tour.kedarnath') ;
    }) ;
}) ;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
