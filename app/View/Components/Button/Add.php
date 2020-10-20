<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Add extends Component
{
    public $label, $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $link)
    {
        $this->label = $label;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.button.add');
    }
}
