<?php

namespace App\View\Components\DashBoard\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sideBar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dash-board.partials.side-bar');
    }
}
