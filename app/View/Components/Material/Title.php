<?php

namespace App\View\Components\Material;

use Illuminate\View\Component;

class Title extends Component
{
    public $opt, $title, $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($opt, $title, $link)
    {
        $this->opt = $opt;
        $this->title = $title;
        $this->link = $link;
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
