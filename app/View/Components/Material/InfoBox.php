<?php

namespace App\View\Components\Material;

use Illuminate\View\Component;

class InfoBox extends Component
{
    public $label, $count;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // $label, $count
    public function __construct($label, $count)
    {
        $this->label = $label;
        $this->count = $count;
        // $this->atribute = $atribute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.material.info-box');
    }
}
