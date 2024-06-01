<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInput extends Component
{

    public $name;
    public $label;
    public $value;
    public $require;
    public $type;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $label, $value = '', $require = false, $type = 'text')
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->require = $require;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-input');
    }
}
