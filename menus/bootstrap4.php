<?php

use MarvinLabs\Menus\Facades\Menu;
use MarvinLabs\Menus\Menu\Items\Heading;
use MarvinLabs\Menus\Menu\Items\Link;
use MarvinLabs\Menus\Presenters\Bootstrap4\NavbarNavPresenter;
use MarvinLabs\Menus\Presenters\Bootstrap4\TabsNavPresenter;
use MarvinLabs\Menus\Support\Links\RouteLink;
use MarvinLabs\Menus\Support\Links\UrlLink;
use MarvinLabs\Menus\Support\Links\VoidLink;

Menu::make('main-menu', function(\MarvinLabs\Menus\Menu\Menu $menu) {
    $menu->setPresenter(new NavbarNavPresenter('ml-auto'));

    $menu->addLink('Item 1', new VoidLink());
    $menu->addLink('Item 2', new VoidLink(), function (Link $item) {
        $item->addLink('Item 2.1', new VoidLink());
        $item->addLink('Item 2.2', new UrlLink('/test'));
        $item->addDivider();
        $item->addLink('Item 2.3', new RouteLink('demo.menu', ['category' => 'bs4']));
    });
    $menu->addLink('Item 3', new UrlLink('/test'));
});

Menu::make('tab-menu-1', function(\MarvinLabs\Menus\Menu\Menu $menu) {
    $menu->setPresenter(new TabsNavPresenter());

    $menu->addLink('Tab 1', new VoidLink())->id('tab_1');
    $menu->addLink('Tab 2', new VoidLink())->id('tab_2');
    $menu->addLink('Tab 3', new VoidLink())->id('tab_3');
});

Menu::make('tab-menu-2', function(\MarvinLabs\Menus\Menu\Menu $menu) {
    $menu->setPresenter(new TabsNavPresenter(TabsNavPresenter::TYPE_PILLS));

    $menu->addLink('Tab A', new VoidLink())->id('tab_A');
    $menu->addLink('Tab B', new VoidLink())->id('tab_B');
    $menu->addLink('Tab C', new VoidLink())->id('tab_C');
});
