<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class SelectStatus extends Component
{
    public $name;
    public $keySelected;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $keySelected)
    {
        // dd($keySelected);
        $this->name = $name;
        $this->keySelected = $keySelected;
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
        return view('components.admin.select-status');
    }
}
