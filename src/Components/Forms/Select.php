<?php

namespace Binlq0\LaravelAdminLte\Components\Forms;

use Binlq0\LaravelAdminLte\Components\Base\InputComponent;

class Select extends InputComponent
{
    /**
     * Variable to store options select
     * 
     * @var array
     */
    public $options;

    /**
     * Key selected value
     * Pick programmatically
     * 
     * @var string|array
     */
    public $selected;

    /**
     * Set default value
     * 
     * @var array
     */
    public $default;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, $selected = '-1', array $default = ['-1' => 'Choose . . .'], array $options = [], string $label = null, string $iGroupClass = null)
    {
        parent::__construct($name, $label, $iGroupClass);

        $this->options = $options;
        $this->default = $default;
        $this->selected = $selected;
    }

    /**
     * Create a new component instance.
     *
     * @return bool
     */
    public function isSelected($value)
    {
        return is_array($this->selected) ?
            in_array($value, $this->selected) :
            $value == $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('adminlte::components.select');
    }
}
