<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public $viewPath = 'frontend.pages.home.';
    public function __construct()
    {
        $categories = Category::defaultOrder()->withDepth()->having('depth', '>', 0)->get();
        View::share('categories', $categories);
    }

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

    public function category($name, $id)
    {
        $product = new Product();
        $newProducts = $product->homeList('new_products', 6)->chunk(3);
        $productsOfCategory = $product->homeList('product_of_category', 12, $id);
        return view("{$this->viewPath}category", compact('name', 'id', 'newProducts', 'productsOfCategory'));
    }
}
