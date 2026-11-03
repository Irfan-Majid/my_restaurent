<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sakib extends Component
{
    public $name;
    public $address;
    public $age;
	
	
	
    public function __construct($name, $address, $age)
    {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sakib');
    }
}
