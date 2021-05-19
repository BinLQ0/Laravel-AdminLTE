<?php

namespace Binlq0\LaravelAdminLte\Components\Base;

use Illuminate\View\Component;

class InputComponent extends Component
{
    /**
     * The name attribute for the underlying element.
     *
     * @var string
     */
    public $name;

    /**
     * The label for referance input item.
     * 
     * @var string
     */
    public $label;

    /**
     * Additional classes for "input-group" element.
     *
     * @var string
     */
    public $iGroupClass;

    /**
     * Additional classes for "form-group" element.
     *
     * @var string
     */
    public $fGroupClass;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $label = null, string $iGroupClass = null, string $fGroupClass = null)
    {
        $this->name         = $name;
        $this->label        = $label;
        $this->iGroupClass  = $iGroupClass;
        $this->fGroupClass  = $fGroupClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // Render view from child class
    }
}
