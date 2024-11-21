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

    public function kuariPassTour() {
        return view('website.tourdetail.kuaripass') ;
    }

    public function kedarKanthaTour() {
        return view('website.tourdetail.kedarkantha') ;
    }

    public function harKiDunTour() {
        return view('website.tourdetail.harkidun') ;
    }

    public function rupinPassTour() {
        return view('website.tourdetail.rupinpass') ;
    }

    public function dyaraBugyalTour() {
        return view('website.tourdetail.dyarabugyal') ;
    }

    public function nagTibbaTour() {
        return view('website.tourdetail.nagtibba') ;
    }

    public function bramhaTalTour() {
        return view('website.tourdetail.bramhatal') ;
    }

    public function baliPassTour() {
        return view('website.tourdetail.balipass') ;
    }

}
