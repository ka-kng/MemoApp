<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Buttton extends Component
{
    public $type;
    public $label;


    public function __construct($type, $label)
    {
        $this->type = $type;
        $this->type = $label;
    }

    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
