<?php

namespace App\Http\View\Composers;

use Binlq0\SidebarMenu\Facades\Menu;

use Illuminate\View\View;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $menus = [];

        /**
         * Configuration your Menu below here.
         */
        
        // $menus = Menu::addHeader('Dashboard')
        //     ->addItem('Dashboard 1', '#')
        //     ->addItem('Dashboard 1', '#')
        //     ->addItem('Dashboard 1', '#')
        //     ->create();

        $view->with('menus', $menus);
    }
}
