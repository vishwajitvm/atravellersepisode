<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutview() {
        return view('website.about') ;
    }

    public function contact() {
        return view('website.contact') ;
    }

    public function toutPackage() {
        return view('website.toutPackage') ;
    }

    public function kedarnathTour() {
        return view('website.tourdetail.kedarnath') ;
    }
}
