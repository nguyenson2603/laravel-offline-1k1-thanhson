<?php

namespace App\View\Components\Admin;

use App\Models\Category;
use Illuminate\View\Component;

class SelectCategory extends Component
{
    public $name;
    public $id;
    public $keySelected;
    public $values;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $keySelected, $id = null, $values = null)
    {
        $this->name = $name;
        $this->keySelected = $keySelected;
        $this->values = empty($values) ? Category::all() : $values;
        $this->id = $id ? $id : $name;
    }

    public function selected($value)
    {
        return $value === $this->keySelected ? 'selected' : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.select-category');
    }
}
