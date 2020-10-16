<?php

namespace App\View\Components\Material;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    // public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // $title
    public function __construct()
    {
        // $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.material.breadcrumb');
    }
}
