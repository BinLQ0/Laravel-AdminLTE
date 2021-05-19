<?php

namespace Binlq0\LaravelAdminLte\Components\Forms;

use Binlq0\LaravelAdminLte\Components\Base\InputComponent;

class Date extends InputComponent
{
    /**
     * Put an icon in the input form.
     * Use Font Awesome library
     * 
     * Ref: https://fontawesome.com/
     * 
     * @var string 
     */
    public $icon;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label = null, $iGroupClass = null, $icon = 'far fa-calendar-alt')
    { 
        $this->icon = $icon;
        parent::__construct($name, $label, $iGroupClass);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminlte::components.input');
    }
}
