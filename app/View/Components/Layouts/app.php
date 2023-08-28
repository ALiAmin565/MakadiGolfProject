<?php

namespace App\View\Components\Layouts;

use Closure;
use App\Models\ContactUs;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class app extends Component
{
    public $title;
    public $contactUs;
    /**
     * Create a new component instance.
     */
    public function __construct($title = null)
    {
        // if not exisit title will be empty string
        $this->title = $title ?? '' ;
        $this->contactUs = ContactUs::first();
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.app');
    }
}
