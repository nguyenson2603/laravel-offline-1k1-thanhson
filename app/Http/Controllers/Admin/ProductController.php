<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->model = new Product();
        View::share('model', 'products');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = $this->model->getList($request->all());
        $params = $request;
        return view('admin.pages.product.index', compact('products', 'params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::categories();
        return view('admin.pages.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::categories();
        return view('admin.pages.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Product $product)
    {
        Product::where('id', $product->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect()->route('admin.products.index');
    }

    public function status(Product $product)
    {
        $id = $product->id;
        $status = ($product->status == 1) ? 0 : 1;
        Product::where('id', $id)->update(['status' => $status]);
        return redirect()->route('admin.products.index');
    }
}
