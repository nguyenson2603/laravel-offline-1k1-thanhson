<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider as Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\StoreRequest;
use App\Http\Requests\Slider\UpdateRequest;
use Illuminate\Support\Facades\View;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->model = new Model();
        $this->controllerName = 'slider';
        $this->routeName = 'sliders';
        View::share('model', 'sliders');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = $this->model->getList($request->all());
        $params = $request;
        return view("admin.pages.{$this->controllerName}.index", compact('items', 'params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.{$this->controllerName}.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Model::create($request->all());
        return redirect()->route("admin.{$this->routeName}.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model $slider)
    {
        dd($slider);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model $slider)
    {
        return view("admin.pages.{$this->controllerName}.edit", compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Model $slider)
    {
        Model::where('id', $slider->id)->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);
        return redirect()->route("admin.{$this->routeName}.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model $slider)
    {
        $slider->delete();
        return redirect()->route("admin.{$this->routeName}.index");
    }

    public function status(Model $slider)
    {
        $id = $slider->id;
        $status = ($slider->status == 1) ? 0 : 1;
        Model::where('id', $id)->update(['status' => $status]);
        return redirect()->route("admin.{$this->routeName}.index");
    }
}
