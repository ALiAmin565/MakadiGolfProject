<?php

namespace App\View\Components\DashBoard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sideBarItemArray extends Component
{
    public $title;
    public $values =[];
    public $icon;
    public $numberDropdown;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$icon,$values,$numberDropdown)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->values = $values;
        $this->numberDropdown = $numberDropdown;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dash-board.side-bar-item-array');
    }
}
