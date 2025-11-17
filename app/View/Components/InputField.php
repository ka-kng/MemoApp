<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public $label;
    public $type;
    public $id;
    public $placeholder;
    public $name;

    public function __construct($label, $type, $id, $placeholder, $name)
    {
        $this->label = $label;
        $this->type = $type;
        $this->id = $id;
        $this->placeholder = $placeholder;
        $this->name = $name;
    }

    public function render(): View|Closure|string
    {
        return view('components.input-field');
    }
}
