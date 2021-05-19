<?php

namespace Binlq0\LaravelAdminLte\Components\Forms;

use Binlq0\LaravelAdminLte\Components\Base\ButtonComponent;

class Button extends ButtonComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, string $url = '#', string $icon = null)
    {
        parent::__construct($label, $url, $icon);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('adminlte::components.button');
    }
}
