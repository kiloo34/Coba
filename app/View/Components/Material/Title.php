<?php

namespace App\View\Components\Material;

use Illuminate\View\Component;

class Title extends Component
{
    public $opt, $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($opt, $title)
    {
        $this->opt = $opt;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.material.title');
    }
}
