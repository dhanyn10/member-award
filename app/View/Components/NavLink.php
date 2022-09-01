<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{
    public $routeName;
    public $text;

    public function __construct($routeName, $text='')
    {
        $this->routeName = $routeName;
        if($text != null)
            $this->text = $text;
        else
            $this->text = $routeName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-link');
    }
}
