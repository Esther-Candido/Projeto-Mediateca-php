<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SmallBox extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct(
        public string $bg,
        public string $valor,
        public string $titulo,
        public string $icon,
        public string $link
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.small-box');
    }
}
