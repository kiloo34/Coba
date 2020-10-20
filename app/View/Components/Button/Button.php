<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Button extends Component
{
    public $label, $route;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $route)
    {
        $this->label = $label;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.button.button');
    }
}
