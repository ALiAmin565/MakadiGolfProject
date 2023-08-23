<?php

namespace App\View\Components\DashBoard\Partials;


use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{

    public $owner;
    /**
     * Create a new component instance.
     */
    public function __construct($owner)
    {
        $this->owner = $owner;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dash-board.partials.footer');
    }
}
