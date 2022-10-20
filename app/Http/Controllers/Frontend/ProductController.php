<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public $viewPath = 'frontend.pages.product.';
    public $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function index(Request $request)
    {
        $products = $this->model->getList($request->all(), 12);
        $params = [
            'new_products' => $this->model->homeList('new_products', 6),
        ];
        return view("{$this->viewPath}index", compact('products', 'params'));
    }

    public function detail($id)
    {
        return view("{$this->viewPath}detail");
    }
}
