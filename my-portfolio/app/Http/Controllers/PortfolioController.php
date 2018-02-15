<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
        {
            return view('front-end.home.home');
        }
    public function about()
        {
            return view('front-end.home.about');
        }  
    public function gallery()
        {
            $dedar='gallery';
            return view('front-end.home.gallery',compact('dedar'));
        }  
    public function portfolio()
        {
            return view('front-end.home.portfolio');
        }
    public function contact()
        {
            return view('front-end.home.contact');
        }
}
