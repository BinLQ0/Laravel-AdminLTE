<?php

namespace Binlq0\LaravelAdminLte\Components\Layouts;

use Binlq0\LaravelAdminLte\Components\Base\ButtonComponent;

class SidebarMenu extends ButtonComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, string $url = '#', string $icon = 'fas fa-circle nav-icon')
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
        return view('adminlte::components.sidebar-menu');
    }
}
