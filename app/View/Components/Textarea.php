<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $name;
    public $cols;
    public $rows;

    public function __construct($id, $name, $cols = 30, $rows = 5)
    {
        $this->id = $id;
        $this->name = $name;
        $this->cols = $cols;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.textarea');
    }
}
