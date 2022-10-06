<?php

namespace App\View\Components\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class FilterStatusProduct extends Component
{
    public $currentStatus;
    public $params;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($currentStatus, $params)
    {
        $this->currentStatus = $currentStatus;
        $this->params = $params;
    }

    public function status(){
        $model = new Product();
        $result = $model->countByStatus($this->params);
        array_unshift($result, [
            'status' => 'all',
            'count' => array_sum(array_column($result, 'count')),
        ]);
        return $result;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.filter-status-product');
    }
}
