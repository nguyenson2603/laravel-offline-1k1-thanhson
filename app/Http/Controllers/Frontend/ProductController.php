<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public $viewPath = 'frontend.pages.product.';
    public $model;

    public function __construct()
    {
        $this->model = new Product();
        $categories = Category::defaultOrder()->withDepth()->having('depth', '>', 0)->get();
        View::share('categories', $categories);
    }

    public function index(Request $request)
    {
        $products = $this->model->getList($request->all(), 12);
        $newProducts = $this->model->homeList('new_products', 6)->chunk(3);
        return view("{$this->viewPath}index", compact('products', 'newProducts'));
    }

    public function detail($id)
    {
        $product = Product::where('id', $id)->first();
        $category = Category::where('id', $product->category_id)->first();
        $newProducts = $this->model->homeList('new_products', 6)->chunk(3);
        return view("{$this->viewPath}detail", compact('product', 'category', 'newProducts'));
    }
}
