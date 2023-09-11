<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class checkBoxEquipment extends Component
{
    public $id;
    public $title;
    public $value;
    public $priceId;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $title, $priceId, $value = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->priceId = $priceId;
        $this->value = $value;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.check-box-equipment');
    }
}
