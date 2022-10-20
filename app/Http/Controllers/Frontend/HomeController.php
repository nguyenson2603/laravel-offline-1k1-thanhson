<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $viewPath = 'frontend.pages.home.';

    public function index(){
        $product = new Product();
        $params = [
            'slider' => Slider::getList(),
            'is_top_collection' => $product->homeList('is_top_collection', 3),
            'is_trending' => $product->homeList('is_trending', 6),
            'new_products' => $product->homeList('new_products', 6),
            'is_feature' => $product->homeList('is_feature', 6),
            'is_best_seller' => $product->homeList('is_best_seller', 6),
            'is_on_sale' => $product->homeList('is_on_sale', 6),
            'big_savings' => $product->homeList('big_savings', 10),
        ];
        return view("{$this->viewPath}index", compact('params'));
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
