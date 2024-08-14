<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class navbar extends Component
{
    public $navType;
    public $activeLink;
    public $adminType;

    public $pfp;
    public function __construct($navType, $activeLink)
    {
        $this->navType = $navType;
        $this->activeLink = $activeLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
