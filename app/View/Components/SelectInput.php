<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectInput extends Component
{

    public $name;
    public $label;
    public $require;
    public $selected;
    public $options;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $label, $options = [], $selected = null, $require = "false")
    {
        $this->name = $name;
        $this->label = $label;
        $this->require = $require;
        $this->options = $options;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-input');
    }
}
