<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $viewPath = 'frontend.pages.home.';

    public function index()
    {
        $product = new Product();
        $slider = new Slider;
        $params = [
            'slider' => $slider->getList(),
            'is_top_collection' => $product->homeList('is_top_collection', 3),
            'is_trending' => $product->homeList('is_trending', 6),
            'big_savings' => $product->homeList('big_savings', 10),
        ];
        $newProducts = $product->homeList('new_products', 6)->chunk(3);
        $featureProducts = $product->homeList('is_feature', 6)->chunk(3);
        $bestSellerProducts = $product->homeList('is_best_seller', 6)->chunk(3);
        $onSaleProducts = $product->homeList('is_on_sale', 6)->chunk(3);
        return view("{$this->viewPath}index", compact('params', 'newProducts', 'featureProducts', 'bestSellerProducts', 'onSaleProducts'));
    }

    public function login()
    {
        return view("{$this->viewPath}login");
    }

    public function register()
    {
        return view("{$this->viewPath}register");
    }

    public function cart()
    {
        return view("{$this->viewPath}cart");
    }

    public function checkout()
    {
        return view("{$this->viewPath}checkout");
    }
}
