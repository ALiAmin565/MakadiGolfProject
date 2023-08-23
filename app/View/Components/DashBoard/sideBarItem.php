<?php

namespace App\View\Components\DashBoard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sideBarItem extends Component
{
    public $icon;
    public $title;
    public $link;
    /**
     * Create a new component instance.
     */
    public function __construct($icon, $title, $link)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dash-board.side-bar-item');
    }
}
