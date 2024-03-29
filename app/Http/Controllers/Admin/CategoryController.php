<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->model = new Category();
        View::share('model', 'categories');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $items = $this->model->getList($request->all());
        $items = Category::defaultOrder()->withDepth()->having('depth', '>', 0)->get();
        $params = $request;
        return view('admin.pages.category.index', compact('items', 'params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Category::defaultOrder()->withDepth()->get();
        return view('admin.pages.category.create', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        dd($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $parents = Category::defaultOrder()->withDepth()->where('_lft', '<', $category->_lft)->orWhere('_rgt', '>', $category->_rgt)->get();
        return view('admin.pages.category.edit', compact('category', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Category $category)
    {
        // Category::where('id', $category->id)->update([
        //     'name' => $request->name,
        //     'status' => $request->status,
        // ]);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }

    public function status(Category $category)
    {
        $id = $category->id;
        $status = ($category->status == 1) ? 0 : 1;
        Category::where('id', $id)->update(['status' => $status]);
        return redirect()->route('admin.categories.index');
    }

    public function move(Category $category, $action){
        if($action == 'up'){
            $category->up();
        }else{
            $category->down();
        }
        return redirect()->route('admin.categories.index');
    }
}
