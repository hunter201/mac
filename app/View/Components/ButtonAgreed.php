<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonAgreed extends Component
{

    public $text;
    public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text)
    {
        $this->text = $text;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-agreed');
    }
}
