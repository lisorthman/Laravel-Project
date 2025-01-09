<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInput extends Component
{
    public $label;
    public $name;
    public $type;
    public $class;
    public $placeholder;

    public function __construct($label, $name, $type = 'text', $class = 'form-control', $placeholder = '')
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->class = $class;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('components.form-input');
    }
    
}
