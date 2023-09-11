<?php

namespace App\View\Components\partials;

use Closure;
use App\Models\Award;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class footer extends Component
{
    public $contactUs;
    public $awards;
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
        $this->awards = Award::get()->pluck('image')->toArray();
        return view('components.partials.footer');
    }
}
