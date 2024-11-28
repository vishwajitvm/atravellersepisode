<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\website\HomeController;
use App\Models\ManageHome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $manageHomes = ManageHome::first();
    return view('website.index' , compact('manageHomes'));
})->name('homepage');

//WEBSITE ROUTES
Route::get('/about'  , [HomeController::class , 'aboutview'])->name('about') ;
Route::get('/contact'  , [HomeController::class , 'contact'])->name('contact') ;
Route::get('/tour-package'  , [HomeController::class , 'toutPackage'])->name('tour-package') ;

Route::controller(HomeController::class)->group(function() {
    Route::prefix('tour')->group(function() {
        Route::get('/kedarnath'  , [HomeController::class , 'kedarnathTour'])->name('tour.kedarnath') ;
        Route::get('/kuari-pass'  , [HomeController::class , 'kuariPassTour'])->name('tour.kuari-pass') ;
        Route::get('/kedarkantha'  , [HomeController::class , 'kedarKanthaTour'])->name('tour.kedarkantha') ;
        Route::get('/har-ki-dun'  , [HomeController::class , 'harKiDunTour'])->name('tour.har-ki-dun') ;

        Route::get('/rupin-pass'  , [HomeController::class , 'rupinPassTour'])->name('tour.rupin-pass') ;
        Route::get('/dyara-bugyal'  , [HomeController::class , 'dyaraBugyalTour'])->name('tour.dyara-bugyal') ;
        Route::get('/nag-tibba'  , [HomeController::class , 'nagTibbaTour'])->name('tour.nag-tibba') ;
        Route::get('/bramha-tal'  , [HomeController::class , 'bramhaTalTour'])->name('tour.bramha-tal') ;
        Route::get('/bali-pass'  , [HomeController::class , 'baliPassTour'])->name('tour.bali-pass') ;

    }) ;
}) ;

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/dashboard'  , [AdminController::class , 'dashboard'])->name('dashboard') ;

    //MANAGE HOME urls
    Route::get('/manage-home-page', [AdminController::class, 'manageHomePage'])->name('admin.manage-home-page');
    Route::post('/manage-home', [AdminController::class, 'addManageHome'])->name('admin.manage-home-add');
    Route::put('/manage-home/{id}', [AdminController::class, 'editManageHome'])->name('admin.manage-home-edit');
    Route::delete('/manage-home/{id}', [AdminController::class, 'deleteManageHome'])->name('admin.manage-home-delete');



    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
