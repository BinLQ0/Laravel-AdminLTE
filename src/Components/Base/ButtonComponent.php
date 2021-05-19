<?php

namespace Binlq0\LaravelAdminLte\Components\Base;

use Illuminate\View\Component;

class ButtonComponent extends Component
{
    /**
     * Use to redirect when click menu
     * 
     * @var string
     */
    public $url;

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
     * The label for describe menu.
     * 
     * @var string
     */
    public $label;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $label, string $url = '#', string $icon = null)
    {
        $this->label    = $label;
        $this->icon     = $icon;
        $this->url      = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        // Render view from child class
    }
}
