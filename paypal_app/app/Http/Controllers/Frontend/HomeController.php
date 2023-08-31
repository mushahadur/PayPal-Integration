<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.pages.home.index');
        // return view('forntend.pages.home.index');  //homeCheckout
    }
    public function homeCheckout(){
        return view('frontend.pages.checkout.index');
        // return view('forntend.pages.home.index');  //homeCheckout
    }
}
