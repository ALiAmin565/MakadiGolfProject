<?php

namespace App\View\Components\DashBoard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textArea extends Component
{
    public $title;
    public $name;
    public $value;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$name,$value=null)
    {
        $this->title = $title;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dash-board.text-area');
    }
}
