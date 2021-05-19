<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="#" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        @auth
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src='https://ui-avatars.com/api/?name=admin&background=0D8ABC&color=fff'
                        class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin</a>
                </div>
            </div>
        @endauth
        <!-- End Profile -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @foreach(config('adminlte.menus') as $key => $menu)
                    @if($key == 'header')
                        <li class="nav-header">{{ $menu["text"] }}</li>
                    @else
                        <x-adminlte-sidebar-menu :label='$menu["text"]' :url='$menu["url"]' :icon='$menu["icon"]' />
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</aside>