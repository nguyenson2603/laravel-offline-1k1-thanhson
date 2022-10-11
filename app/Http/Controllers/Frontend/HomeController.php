<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.app');
    }

    public function login(){
        return view('frontend.pages.login');
    }

    public function register(){
        return view('frontend.pages.register');
    }

    public function cart(){
        return view('frontend.pages.cart');
    }

    public function checkout(){
        return view('frontend.pages.checkout');
    }
}
