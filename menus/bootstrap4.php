<?php

use MarvinLabs\Menus\Facades\Menu;
use MarvinLabs\Menus\Menu\Items\Heading;
use MarvinLabs\Menus\Menu\Items\Link;
use MarvinLabs\Menus\Presenters\Bootstrap4\NavbarNavPresenter;
use MarvinLabs\Menus\Support\Links\RouteLink;
use MarvinLabs\Menus\Support\Links\UrlLink;
use MarvinLabs\Menus\Support\Links\VoidLink;

Menu::make('navbar-nav', function(\MarvinLabs\Menus\Menu\Menu $menu) {
    $menu->setPresenter(new NavbarNavPresenter('ml-auto'));

    $menu->addLink('Item 1', new VoidLink());
    $menu->addLink('Item 2', new VoidLink(), function (Link $item) {
        $item->addLink('Item 2.1', new VoidLink());
        $item->addLink('Item 2.2', new UrlLink('/test'));
        $item->addDivider();
        $item->addLink('Item 2.3', new RouteLink('demo.menu', ['category' => 'bs4']));
    });
    $menu->addDivider();
    $menu->addLink('Item 3', new RouteLink('demo.menu', ['category' => 'bs4']));
});
