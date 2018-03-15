@extends('layouts.bs')

@section('page.title', 'Laravel Menus')

@section('page.body')

    <div class="container">
        <h1 class="my-3">Bootstrap 4 NavBar Nav</h1>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-3">
            <a href="#" class="navbar-brand">Navbar</a>

            {!! Menu::render('main-menu') !!}
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary my-3">
            <a href="#" class="navbar-brand">Navbar</a>

            @menu('main-menu')
        </nav>

        <h1 class="my-3">Bootstrap 4 Navs</h1>

        <?php use MarvinLabs\Menus\Presenters\Bootstrap4\NavPresenter; ?>

        <div class="my-3">
            @menu('main-menu', new NavPresenter('nav'))
        </div>

        <div class="my-3">
            @menu('main-menu', new NavPresenter('nav nav-pills'))
        </div>

        <h1 class="my-3">Bootstrap 4 Tabs</h1>

        <div class="my-3">
            @menu('tab-menu-1')
            <div class="tab-content p-3">
                <div class="tab-pane fade show active" id="nav_tab_1" role="tabpanel" aria-labelledby="tab_tab_1">
                    This is first tab
                </div>
                <div class="tab-pane fade" id="nav_tab_2" role="tabpanel" aria-labelledby="tab_tab_2">
                    This is second tab
                </div>
                <div class="tab-pane fade" id="nav_tab_3" role="tabpanel" aria-labelledby="tab_tab_3">
                    This is third tab
                </div>
            </div>
        </div>

        <div class="my-3">
            @menu('tab-menu-2')
            <div class="tab-content p-3">
                <div class="tab-pane active" id="nav_tab_A" role="tabpanel" aria-labelledby="tab_tab_A">
                    This is tab A
                </div>
                <div class="tab-pane fade" id="nav_tab_B" role="tabpanel" aria-labelledby="tab_tab_B">
                    This is tab B
                </div>
                <div class="tab-pane fade" id="nav_tab_C" role="tabpanel" aria-labelledby="tab_tab_C">
                    This is tab C
                </div>
            </div>
        </div>
    </div>

@endsection
