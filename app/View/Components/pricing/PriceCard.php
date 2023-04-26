<?php

namespace App\View\Components\pricing;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PriceCard extends Component
{
    public $price;
    /**
     * Create a new component instance.
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pricing.price-card');
    }
}
