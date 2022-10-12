<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $viewPath = 'frontend.pages.home.';

    public function index(){
        return view("{$this->viewPath}index");
    }

    public function login(){
        return view("{$this->viewPath}login");
    }

    public function register(){
        return view("{$this->viewPath}register");
    }

    public function cart(){
        return view("{$this->viewPath}cart");
    }

    public function checkout(){
        return view("{$this->viewPath}checkout");
    }
}
