<?php

namespace App\View\Components\Admin;

use App\Models\Category;
use Illuminate\View\Component;

class FilterStatusCategory extends Component
{
    public $currentStatus;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($currentStatus)
    {
        $this->currentStatus = $currentStatus;
    }

    public function status()
    {
        $model = new Category();
        $result = $model->countByStatus();
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
        return view('components.admin.filter-status-category');
    }
}
