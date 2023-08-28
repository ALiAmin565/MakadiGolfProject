<?php

namespace App\View\Components\partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{
    public $contactUs;
    /**
     * Create a new component instance.
     */
    public function __construct($contactUs)
    {
        $this->contactUs = $contactUs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.footer');
    }
}
